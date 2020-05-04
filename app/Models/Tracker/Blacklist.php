<?php

namespace App\Models\Tracker;
use App\Models\Models;

class Blacklist extends Models {
 public $timestamps  = true;
 protected $table    = 'efflux_track.blacklist';
 protected $fillable = ['id', 'end', 'label'];
}