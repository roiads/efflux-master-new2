<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbAdRecord extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_accounts.fbadrecord';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['ad_id', 'from', 'to', 'budget', 'results', 'reach', 'impressions', 'spent', 'likes'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbAd() {
  return $this->belongsTo(FbAd::class);
 }
}