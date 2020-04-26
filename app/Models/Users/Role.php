<?php
namespace App\Models\Users;
use App\Models\Models;

class Role extends Models {
 public function __construct() {
  $this->Table('users.roles');
  $this->fillable = ['name', 'description'];
 }
 public function users() {
  return $this->belongsToMany(
   'App\Models\Users\User',
   $this->Table('users.user_role'),
   'role_id',
   'user_id');
 }
}