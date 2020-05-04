<?php
namespace App\Charts;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use \App\Models\Reporting\Traffic;

class TrafficCharts extends Chart {

 public $days;

 public $labels;
 public $series;
 public $options;

 public function __construct() {
  parent::__construct();
 }
 public function __invoke() {
  $this->days = 30;
  $this->getData();
  $this->makeLabels();
 }
 public function getData() {
  $this->data = Traffic::all();
 }
 public function makeLabels() {
 }
 public function makeSeries($name, $data) {
 }
}