<?php

namespace App\Http\Controllers;

class ChartController extends Controller {
 public $title;
 public $container;
 public $options = [];
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
 public function dataset($name, $data, $opts = null) {
  $dataset         = ['label' => $name];
  $dataset['data'] = $data;
  if (is_array($opts)) {
   foreach ($opts as $k => $v) {
    $dataset[$k] = $v;
   }
  }
  $this->datasets[] = collect($dataset);
 }
}