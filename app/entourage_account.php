<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entourage_account extends Model {
 public $timestamps    = true;
 protected $table      = 'efflux_entourage.accounts';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['username', 'password', 'email', 'type_id', 'profile_id'];
 protected $hidden     = ['created_at', 'updated_at'];

 public function profile() {
  return $this->belongsTo(entourage_profile::class);
 }
 public function type() {
  return $this->belongsTo(entourage_type::class);
 }
 public function users() {
  return $this->belongsToMany(user::class, 'efflux_users.user_entourage', 'account_id', 'user_id');
 }
}