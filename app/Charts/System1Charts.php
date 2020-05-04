<?php
namespace App\Charts;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Arr;
use \App\Models\Reporting\System1;

class System1Charts extends Chart {

 public $days = 30;

 public $domains;
 public $dates;

 public $labels;
 public $series;
 public $options = [];

 public function __construct() {
  //$this->options['name'] = '';
  parent::__construct();
 }
 public function __invoke($args = null) {
  $dataset = [2, 3, 1, 2, 3, 1, 2, 3, 1, 1, 2, 3, 1, 2, 3, 1];

  $args = parseArgs($args);
  $this->getData($args);

  $this->makeLabels();
  $this->dataset('Mobile', 'bar', $dataset);
  $this->dataset('Desktop', 'bar', $dataset);
  $this->dataset('Revenue', 'line', $dataset);
  $this->dataset('Clicks', 'line', $dataset);

  dd($this);
 }

 public function getData($args) {
  $data = System1::select('date',
   'campaign_domain as domain',
   'subid',
   'revenue',
   'clicks as clickthrough',
   'mobile_unique as mobile',
   'desktop_unique as desktop')
   ->where('date', '>=', today()->subDays($this->days))
   ->orderByDesc('date')
   ->get();
  return $this->data = $data;
 }
 public function getDomains() {
  $data                 = data_get($this->data, '*.domain');
  $data                 = array_unique($data);
  return $this->domains = $data;
 }
 public function makeLabels() {
  $dates = data_get($this->data, '*.date');
  $dates = array_unique($dates);
  $dates = Arr::flatten($dates);
  foreach ($dates as &$date) {
   $date = date('m-d', strtotime($date));
  }
  return $this->labels = $dates;
 }
}