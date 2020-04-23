<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reports_system1 extends Model {
 protected $table      = 'efflux_track.system1_reports';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = [
  'date',
  'campaign_dommain',
  'mobile_total',
  'mobile_unique',
  'desktop_total',
  'desktop_unique',
  'searches',
  'clicks',
  'revenue',
 ];

}