<?php
namespace App\Charts;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\DB;
use \App\Models\Reporting\System1;

class System1Charts extends Chart {

 public $content_domains = [];

 public function __construct() {
  parent::__construct();
 }
 public function getData(System1 $s1) {
  $data = $s1->select('date', 'campaign_domain as domain', 'subid',
   DB::raw('mobile_unique as mobile, desktop_unique as desktop, revenue'),
   DB::raw('clicks as clicks'))
   ->where('date', '>=', today()->subDays(30))
   ->get();
  $this->content_domains = array_unique(data_get($data, '*.domain'));
  dd($domains);

  $chart = new System1Charts;
  dd($chart);

  $chart->labels($data->keys());
  $chart->dataset('My dataset', 'line', $data->values());
  //return response()->json($data);
  return $chart->api();
 }
}