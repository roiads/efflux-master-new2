<?php

namespace App;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class site_tag extends Model
{ 
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