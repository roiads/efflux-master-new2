<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class assets_server extends Model {
 use SoftDeletes;
 use FormAccessible;
 public $timestamps  = true;
 protected $table    = 'efflux_assets.servers';
 protected $fillable = [
  'name',
  'provider',
  'public_ip',
  'private_ip',
  'user',
  'pass',
  'sudo_pass',
  'db_user',
  'db_pass',
  'sys_os',
  'sys_cpus',
  'sys_harddrive',
  'sys_memory',
  'notes'];
 protected $hidden = [
  'created_at',
  'updated_at',
  'deleted_at'];
 public function domains() {
  return $this->hasMany(assets_domain::class);
 }
}