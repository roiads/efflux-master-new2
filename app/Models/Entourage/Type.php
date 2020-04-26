<?php
namespace App\Models\Entourage;
use App\Models\Models;

class Type extends Models {
 public function __construct() {
  $this->Table('entourage.types');
  $this->fillable = ['name', 'url', 'login_url', 'signup_url', 'logo'];
 }
 public function accounts() {
  return $this->hasMany('App\Models\Entourage\Account', 'type_id');
 }
}