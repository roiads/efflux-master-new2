<?php
namespace App\Models\Assets;
use App\Models\Models;

class Server extends Models {
 public function __construct() {
  $this->Table('assets.servers');
  $this->fillable = ['name', 'provider', 'public_ip', 'private_ip', 'user', 'pass', 'sudo_pass', 'db_user', 'db_pass', 'sys_os', 'sys_cpus', 'sys_harddrive', 'sys_memory', 'notes'];
 }
 public function domains() {
  return $this->hasMany('\App\Models\Assets\Domain');
 }
}