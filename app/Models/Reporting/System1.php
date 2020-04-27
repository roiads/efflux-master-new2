<?php

namespace App\Models\Reporting;
use App\Models\Models;

class System1 extends Models {
 public function __construct() {
  $this->Table('report.api_system1');
  $this->fillable = ['date', 'campaign_domain', 'mobile_total', 'mobile_unique', 'desktop_total', 'desktop_unique', 'searches', 'clicks', 'revenue', 'subid'];
 }
}