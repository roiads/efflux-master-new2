<?php
namespace App\Models\SiteManager;
use App\Models\Models;

class Page extends Models {
 public function __construct() {
  $this->Table('site.pages');
  $this->fillable = ['title', 'body'];
 }
 public function tags() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Tag',
   $this->Table('site.post_tag'),
   'page_id',
   'tag_id'
  );
 }
 public function images() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Image',
   $this->Table('site.post_image'),
   'page_id',
   'image_id'
  );
 }
 public function image() {
  return $this->belongsTo('App\Models\SiteManager\Image', 'image_id', 'id');
 }
 public function domain() {
  return $this->belongsTo('App\Models\Assets\Domain', 'domain_id', 'id');
 }
 public function routes() {
  return $this->hasMany('App\Models\SiteManager\Route', 'page_id', 'id');
 }
}