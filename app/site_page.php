<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class site_page extends Model {
 use SoftDeletes;
 public $timestamps    = true;
 protected $table      = 'efflux_site.pages';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['title', 'body'];
 protected $hidden     = ['created_at', 'updated_at', 'deleted_at'];
 public function routes() {
  return $this->hasMany(site_route::class);
 }
 public function users() {
  return $this->belongsToMany(user::class);
 }
}