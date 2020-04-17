<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbAdSet extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.FbAdSet';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['id', 'campaign_id', 'name', 'budget'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbAds() {
  return $this->hasMany(FbAd::class);
 }
 public function FbCampaign() {
  return $this->belongsTo(FbCampaign::class);
 }
}