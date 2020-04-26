<?php
namespace App\Models\SiteManager;
use App\Models\Models;

class Post extends Models {
 public function __construct() {
  $this->Table('site.posts');
  $this->fillable = ['title', 'body', 'excerpt', 'description'];
 }
 public function tags() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Tag',
   $this->Table('site.post_tag'),
   'post_id',
   'tag_id'
  );
 }
 public function domains() {
  return $this->belongsToMany(
   'App\Models\Assets\Domain',
   $this->Table('site.routes'),
   'post_id',
   'domain_id'
  );
 }
 public function images() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Image',
   $this->Table('site.post_image'),
   'post_id',
   'image_id'
  );
 }
 public function image() {
  return $this->belongsTo('App\Models\SiteManager\Image');
 }
 public function domain() {
  return $this->belongsTo('App\Models\Assets\Domain');
 }
 public function routes() {
  return $this->hasMany('App\Models\SiteManager\Route', 'post_id', 'id');
 }
}