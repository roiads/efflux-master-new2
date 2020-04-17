<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbAdAccount extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.fbadaccount';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['id', 'name', 'business_id'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbCampaigns() {
  return $this->hasMany(FbCampaign::class);
 }
 public function FbProfile() {
  return $this->belongsTo(FbProfile::class);
 }
}