<?php

namespace App\Models\Tracker;
use App\Models\Models;

class Traffic extends Models {
 public $timestamps  = true;
 protected $table    = 'efflux_track.traffic';
 protected $fillable = ['ip', 'isp', 'network', 'domain', 'user_type', 'user_agent', 'city', 'country', 'action', 'notes', 'uri'];
}