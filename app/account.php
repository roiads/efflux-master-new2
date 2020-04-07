<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model {
 public $timestamps    = true;
 protected $table      = 'efflux_accounts.accounts';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['username', 'password', 'email', 'type_id', 'profile_id'];
 protected $hidden     = ['created_at', 'updated_at'];

 public function profile() {
  return $this->belongsTo(account_profile::class);
 }
 public function type() {
  return $this->belongsTo(account_type::class);
 }
 public function users() {
  return $this->belongsToMany(user::class, 'efflux_users.user_account', 'account_id', 'user_id');
 }
}