<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class assets_domain extends Model {
 use SoftDeletes;
 use FormAccessible;
 public $timestamps  = true;
 protected $table    = 'efflux_assets.domains';
 protected $fillable = ['name', 'path', 'repository'];
 public function routes() {
  return $this->hasMany(site_route::class, 'domain_id');
 }
 public function server() {
  return $this->belongsTo(assets_server::class);
 }
}