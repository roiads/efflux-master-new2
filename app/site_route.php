<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class site_route extends Model {
 use SoftDeletes;
 public $timestamps    = true;
 protected $table      = 'efflux_site.routes';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['pattern', 'post_id'];
 protected $hidden     = ['created_at', 'updated_at', 'deleted_at'];
 public function post() {
  return $this->belongsTo(site_post::class);
 }
 public function page() {
  return $this->belongsTo(site_page::class);
 }
 public function domain() {
  return $this->belongsTo(assets_domain::class);
 }
}