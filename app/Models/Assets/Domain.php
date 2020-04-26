<?php
namespace App\Models\Assets;
use App\Models\Models;

class Domain extends Models {
 public function __construct() {
  $this->Table('assets.domains');
  $this->fillable = ['name', 'path', 'repository', 'ssl', 'type', 'server_id'];
 }
 public function routes() {
  return $this->hasMany('\App\Models\SiteManager\Route', 'domain_id', 'id');
 }
 public function posts() {
  return $this->hasMany('\App\Models\SiteManager\Post', 'domain_id', 'id');
 }
 public function pages() {
  return $this->hasMany('\App\Models\SiteManager\Page', 'domain_id', 'id');
 }
 public function images() {
  return $this->hasMany('\App\Models\SiteManager\Image', 'domain_id', 'id');
 }
 public function tags() {
  return $this->hasMany('\App\Models\SiteManager\Tag', 'domain_id', 'id');
 }
 public function server() {
  return $this->belongsTo('\App\Models\Assets\Server');
 }
}