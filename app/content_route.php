<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class content_route extends Model {
 use SoftDeletes;
 public $timestamps    = true;
 protected $table      = 'efflux_content.routes';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['pattern', 'post_id'];
 protected $hidden     = ['created_at', 'updated_at', 'deleted_at'];
 public function post() {
  return $this->belongsTo(content_post::class);
 }
 public function page() {
  return $this->belongsTo(content_page::class);
 }
}