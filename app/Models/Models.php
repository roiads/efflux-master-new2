<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model {
 use FormAccessible, SoftDeletes;
 public $timestamps = true;
 public $guarded    = [];
 public $hidden     = ['created_at', 'updated_at', 'deleted_at'];

 public function Table($table) {
  return $this->table = 'efflux_' . $table;
 }
}