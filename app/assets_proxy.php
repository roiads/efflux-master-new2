<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class assets_proxy extends Model {

 use FormAccessible;
 public $timestamps  = true;
 protected $table    = 'efflux_assets.proxies';
 protected $fillable = [
  'ip',
  'port',
  'provider_id',
  'country',
 ];
 public function provider() {
  return $this->belongsTo(provider::class);
 }
}