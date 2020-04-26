<?php
namespace App\Models\SiteManager;
use App\Models\Models;

class Route extends Models {
 public function __construct() {
  $this->Table('site.routes');
  $this->fillable = ['pattern', 'post_id'];
 }
 public function post() {
  return $this->belongsTo('App\Models\SiteManager\Post');
 }
 public function page() {
  return $this->belongsTo('App\Models\SiteManager\Page');
 }
 public function domain() {
  return $this->belongsTo('App\Models\Assets\Domain');
 }
}