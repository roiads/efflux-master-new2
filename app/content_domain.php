<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class domain extends Model {
 use SoftDeletes;
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_content.domains';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['name', 'path'];
 protected $hidden     = ['created_at', 'updated_at', 'deleted_at'];
}