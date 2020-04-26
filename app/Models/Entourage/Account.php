<?php
namespace App\Models\Entourage;
use App\Models\Models;

class Account extends Models {
 public function __construct() {
  $this->Table('entourage.accounts');
  $this->fillable = ['username', 'password', 'email', 'type_id', 'profile_id'];
 }
 public function profile() {
  return $this->belongsTo('App\Models\Entourage\Profile');
 }
 public function type() {
  return $this->belongsTo('App\Models\Entourage\Type');
 }
 public function users() {
  return $this->belongsToMany(
   'App\Models\Users\User',
   $this->Table('users.user_entourage'),
   'account_id',
   'user_id');
 }
}