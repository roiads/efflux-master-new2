<?php
namespace App\View\Components;

use Illuminate\View\Component;

class navgroup extends Component {
 public $title;
 public $icon;
 public function __construct($title, $icon = null) {
  $this->title = $title;
  $this->icon  = $icon;
 }
 public function render() {
  return view('components.navgroup');
 }
}