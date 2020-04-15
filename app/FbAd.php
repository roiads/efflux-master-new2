<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbAd extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_accounts.fbad';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['id', 'adSet_id', 'budget', 'created_at', 'ended_at'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbAdRecord() {
  return $this->hasMany(FbAdRecord::class);
 }
 public function FbAdSet() {
  return $this->belongsTo(FbAdSet::class);
 }
}