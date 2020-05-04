<?php

namespace App\Http\Controllers;

class ChartController extends Controller {
 public $title;
 public $labelX;
 public $labelY;
 public $labels   = [];
 public $datasets = [];

 public function labels($labels) {
  $this->labels = [];
  foreach ($labels as $label) {
   $this->labels[] = $label;
  }
 }
 public function dataset($name, $type, $data) {
  $this->datasets[$name]['type'] = $type;
  $this->datasets[$name]['data'] = $data;
 }
}