<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class entourage_profile extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.profiles';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['status', 'firstname', 'lastname', 'dob', 'gender', 'country', 'city', 'post_code'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function accounts() {
  return $this->hasMany(entourage_account::class, 'profile_id');
 }
 public function users() {
  return $this->belongsToMany(user::class, 'efflux_users.user_entourage', 'profile_id', 'user_id');
 }
}