<?php
namespace App\Charts;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use \App\Models\Reporting\System1;

class System1Charts extends Chart {
 public function __construct() {
  parent::__construct();
 }
 public function getData(System1 $s1) {
  $Q = System1::whereDate('date', '>=', today()->subDays(7));
  $Q = $Q->select('date', 'campaign_domain as domain', 'subid',
   DB::raw('SUM(`mobile_unique`) as `mobile`'),
   DB::raw('SUM(`desktop_unique`) as `desktop`'),
   DB::raw('SUM(`revenue`) as `revenue`'),
   DB::raw('SUM(`clicks`) as `clicks`'),
  );
  $Q = $Q->groupBy(['domain', 'subid', 'date']);
  $Q = $Q->orderBy(['date' => 'desc', 'domain']);
  $Q = $Q->pluck('date', 'domain', 'subid', 'mobile', 'desktop', 'revenue', 'clicks');
  $Q = $this->prepareData($Q);
  return $Q;
 }
 public function prepareData($data) {
  $data = Arr::collapse($data);
  dd($data);
  $chart = new System1Charts;
  dd($chart);

  $chart->labels($data->keys());
  $chart->dataset('My dataset', 'line', $data->values());
  //return response()->json($data);
  return $chart->api();
 }
}