<?php
namespace App\Models\Assets;
use App\Models\Models;

class Domain extends Models {
 public function __construct() {
  $this->Table('assets.domains');
  $this->fillable = ['name', 'path', 'repository', 'ssl', 'type', 'server_id'];
 }
 public function routes() {
  return $this->hasMany('App\Models\SiteManager\Route', 'domain_id', 'id');
 }
 public function posts() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Post',
   $this->Table('site.routes'),
   'domain_id',
   'post_id'
  );
 }
 public function pages() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Page',
   $this->Table('site.routes'),
   'domain_id',
   'page_id'
  );
 }
 public function images() {
  return $this->hasMany(
   'App\Models\SiteManager\Image',
   'domain_id',
   'id'
  );
 }
 public function tags() {
  return $this->hasMany(
   'App\Models\SiteManager\Tag',
   'domain_id',
   'id'
  );
 }
 public function server() {
  return $this->belongsTo('App\Models\Assets\Server');
 }
}