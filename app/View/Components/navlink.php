<?php
namespace App\View\Components;

use Illuminate\View\Component;

class navlink extends Component {
 public $title;
 public $url;
 public $icon;
 public function __construct($title, $url, $icon = 'chevron-compact-right') {
  $this->title = $title;
  $this->url   = $url;
  $this->icon  = $icon;
 }
 public function render() {
  return view('components.navlink');
 }
}