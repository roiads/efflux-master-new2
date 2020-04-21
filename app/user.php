<?php
namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class user extends Authenticatable {
 use Notifiable;
 use SoftDeletes;
 use FormAccessible;
 public $timestamps  = true;
 protected $table    = 'efflux_users.users';
 protected $guarded  = [];
 protected $appends  = ['full_name'];
 protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password'];
 protected $hidden   = ['api_token', 'password', 'remember_token', 'created_at', 'updated_at', 'email_verified_at', 'status', 'deleted_at'];
 protected $casts    = ['email_verified_at' => 'datetime'];

 public function getFullNameAttribute() {
  return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
 }
 public function roles() {
  return $this->belongsToMany(user_role::class, 'efflux_users.user_role', 'user_id', 'role_id');
 }
 public function accounts() {
  return $this->belongsToMany(entourage_account::class, 'efflux_users.user_account', 'user_id', 'account_id');
 }
 public function domains() {
  return $this->belongsToMany(assets_domain::class, 'efflux_users.user_domain', 'user_id', 'domain_id');
 }
 public function posts() {
  return $this->belongsToMany(site_post::class, 'efflux_users.user_post', 'user_id', 'post_id');
 }
 public function isRole($ids = null) {
  return $this->belongsToMany(user_role::class, 'efflux_users.user_role', 'user_id', 'role_id')
   ->wherePivotIn('role_id', $ids)
   ->count() ? true : false;
 }
 public static function admin() {
  return user::find(Auth::id())->isRole([1]);
 }
 public static function site() {
  return user::find(Auth::id())->isRole([2]);
 }
}