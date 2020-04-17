<?php
namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class site_post extends Model {
 use SoftDeletes;
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_site.posts';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['title', 'status', 'body'];
 protected $hidden     = ['created_at', 'updated_at', 'deleted_at'];
 public function routes() {
  return $this->hasMany(site_route::class);
 }
 public function users() {
  return $this->belongsToMany(user::class);
 }
}