<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class account_profile extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_accounts.profiles';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['status', 'firstname', 'lastname', 'dob', 'gender', 'country', 'city', 'post_code'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function accounts() {
  return $this->hasMany(account::class, 'profile_id');
 }
}