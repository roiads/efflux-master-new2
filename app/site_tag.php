<?php

namespace App;
use App\site_tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class site_tag extends Model {
 public function __construct(Request $r) {
  $this->request = $r;
  return $this->getTags();
 }
 public function getTags() {
  $Q = Tag::with('image')
   ->select('id', 'name', 'image_id', 'tagline')
   ->get()->toArray();
  return $this->tags = $Q;
 }
}