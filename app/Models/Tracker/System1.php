<?php

namespace App\Models\Tracker;
use App\Models\Models;

class System1 extends Models {
 public function __construct() {
  $this->Table('track.system1_reports');
  $this->fillable = ['date', 'campaign_dommain', 'mobile_total', 'mobile_unique', 'desktop_total', 'desktop_unique', 'searches', 'clicks', 'revenue'];
 }
}