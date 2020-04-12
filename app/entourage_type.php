<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class entourage_type extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.types';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['name', 'url', 'login_url', 'signup_url', 'logo'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function accounts() {
  return $this->hasMany(entourage_account::class, 'type_id');
 }
}