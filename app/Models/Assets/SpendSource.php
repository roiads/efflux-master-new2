<?php
namespace App\Models\Assets;
use App\Models\Models;

class SpendSource extends Models {
 public function __construct() {
  $this->Table('assets.spendsources');
  $this->fillable = ['source', 'details'];
 }
 public function profiles() {
  return $this->hasMany('App\Models\Entourage\Profile');
 }
}