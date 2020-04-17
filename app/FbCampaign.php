<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbCampaign extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.FbCampaign';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['id', 'account_id', 'name'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbAdSets() {
  return $this->hasMany(FbAdSet::class);
 }
 public function FbAdAccount() {
  return $this->belongsTo(FbAdAccount::class);
 }
}