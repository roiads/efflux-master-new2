<?php
namespace App\Models\SiteManager;
use App\Models\Models;

class Tag extends Models {
 public function __construct() {
  $this->Table('site.tags');
  $this->fillable = ['name', 'tagline', 'image_id', 'domain_id'];
 }
 public function posts() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Post',
   $this->Table('site.post_tag'),
   'tag_id',
   'post_id'
  );
 }
 public function pages() {
  return $this->belongsToMany(
   'App\Models\SiteManager\Page',
   $this->Table('site.post_tag'),
   'tag_id',
   'page_id'
  );
 }
 public function image() {
  return $this->belongsTo('App\Models\SiteManager\Image');
 }
 public function domain() {
  return $this->belongsTo('App\Models\Assets\Domain');
 }
}