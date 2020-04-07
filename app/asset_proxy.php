<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class asset_proxy extends Model {

 use FormAccessible;

 public $timestamps = true;

 protected $table = 'assets.proxies';

 protected $guarded    = [];
 protected $attributes = [
  'status' => 1,
 ];
 protected $fillable = [
  'ip',
  'port',
  'provider_id',
  'country',
 ];
 protected $hidden = [
  'created_at',
  'updated_at',
 ];
 public function provider() {
  return $this->belongsTo(provider::class);
 }
}