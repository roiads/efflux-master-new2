<?php

namespace App\Models\Entourage;
use App\Models\Models;

class Profile extends Models {
 public function __construct() {
  $this->Table('entourage.profiles');
  $this->fillable = ['status', 'firstname', 'lastname', 'dob', 'gender', 'country', 'city', 'post_code'];
 }
 public function accounts() {
  return $this->hasMany('App\Models\Entourage\Account', 'profile_id', 'id');
 }
 public function users() {
  return $this->belongsToMany(
   'App\Models\Users\User',
   $this->Table('users.user_entourage'),
   'profile_id',
   'user_id');
 }
}