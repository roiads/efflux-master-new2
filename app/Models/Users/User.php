<?php
namespace App\Models\Users;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable {
 use Notifiable, SoftDeletes, FormAccessible;
 public $timestamps  = true;
 protected $table    = 'users.users';
 protected $appends  = ['full_name'];
 protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password'];
 protected $hidden   = ['api_token', 'password', 'remember_token', 'created_at', 'updated_at', 'email_verified_at', 'status', 'deleted_at'];
 protected $casts    = ['email_verified_at' => 'datetime'];

 public function getFullNameAttribute() {
  return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
 }
 public function roles() {
  return $this->belongsToMany('App\Models\Users\User', config('app.name') . '_users.user_role', 'user_id', 'role_id');
 }
 public function accounts() {
  return $this->belongsToMany('App\Models\Entourage\Account', config('app.name') . '_users.user_account', 'user_id', 'account_id');
 }
 public function domains() {
  return $this->belongsToMany('App\Models\Assets\Domain', config('app.name') . '_users.user_domain', 'user_id', 'domain_id');
 }
 public function posts() {
  return $this->belongsToMany('App\Models\SiteManager\Post', config('app.name') . '_users.user_post', 'user_id', 'post_id');
 }
 public function isRole($ids = null) {
  return $this->belongsToMany('App\Models\Users\User', config('app.name') . '_users.user_role', 'user_id', 'role_id')
   ->wherePivotIn('role_id', $ids)
   ->count() ? true : false;
 }
 public static function admin() {
  if (Auth::id()) {
   $result = App\Models\Users\User::find(Auth::id())->isRole([1]);
   return $result;
  }
  return false;
 }
 public function __construct() {
  $this->table = config('app.name') . '_' . $this->table;
 }
}