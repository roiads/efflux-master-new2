<?php
namespace App\Charts;
use App\Http\Controllers\ChartController as Chart;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use \App\Models\Reporting\System1;

class System1Charts extends Chart {

 private $fields;
 private $data;

 public function __construct() {
  $this->days   = 30;
  $this->title  = 'System1 Daily Reports';
  $this->fields = [
   'clicks',
   'revenue',
   'sessions',
   'unique'];
 }
 public function __invoke($args = null) {
  $args = parseArgs($args);
  $this->getData($args);
  $this->makeLabels();
  foreach ($this->fields as $field) {
   $opt                = [];
   $opt['borderColor'] = null;
   $opt['yAxisID']     = 'counts';
   $opt['type']        = 'line';
   if ($field == 'revenue') {
    $opt['backgroundColor'] = 'lime';
    $opt['type']            = 'bar';
    $opt['yAxisID']         = 'revenue';
   } elseif (stristr($field, 'sessions')) {
    $opt['borderColor'] = 'yellow';
   } elseif (stristr($field, 'unique')) {
    $opt['borderColor'] = 'blue';
   }
   $this->dataset($field, $this->data->pluck($field), $opt);
  }
  return $this->anyErrors() ?: response()->json($this);
 }
 public function getData($args) {
  $start  = today()->subDays($this->days);
  $domain = $args['domain'] ?? null;
  $subid  = $args['subid'] ?? null;
  $x      = System1::select('date');
  foreach ($this->fields as $f) {
   $x = $x->addSelect(DB::raw('sum(`' . $f . '`) as `' . $f . '`'));
  }
  $x = $x->where('subid', $subid)
   ->where('domain', $domain)
   ->where('date', '>=', $start)
   ->orderByDesc('date')
   ->groupBy('date')
   ->get();
  return $this->data = $x;
 }
 public function makeLabels() {
  $x = data_get($this->data, '*.date');
  $x = array_unique($x);
  asort($x);
  $x = Arr::flatten($x);
  foreach ($x as $d) {
   $date = date('m-d', strtotime($d));
  }
  $this->labels($x);
 }
}