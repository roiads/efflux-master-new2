<?php

namespace App\Models\Reporting;
use App\Models\Models;

class System1 extends Models {
 public function __construct() {
  $this->Table('report.api_system1');
  $this->fillable = [
   'date',
   'domain',
   'subid',
   'sessions',
   'sessions_mobile',
   'sessions_desktop',
   'unique',
   'unique_mobile',
   'unique_desktop',
   'searches',
   'clicks',
   'revenue'];
 }
}