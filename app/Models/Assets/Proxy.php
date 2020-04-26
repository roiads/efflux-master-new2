<?php
namespace App\Models\Assets;
use App\Models\Models;

class Proxy extends Models {
 public function __construct() {
  $this->Table('assets.proxies');
  $this->fillable = ['ip', 'port', 'https', 'user', 'pass', 'provider_id', 'country'];
 }
 public function provider() {
  return $this->belongsTo('App\Models\Entourage\Account', 'provider_id', 'id');
 }
}