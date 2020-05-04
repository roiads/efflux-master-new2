<?php
namespace App\Charts;
use App\Http\Controllers\Controller as ChartController;
use \App\Models\Reporting\Traffic;

class TrafficCharts extends ChartController {

 public $days;

 public $labels;
 public $series;
 public $options;

 public function __construct() {

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