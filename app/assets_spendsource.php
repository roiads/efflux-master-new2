<?php
namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class assets_spendsource extends Model {
 use FormAccessible;
 use SoftDeletes;
 public $timestamps  = true;
 protected $table    = 'efflux_entourage.spendsources';
 protected $guarded  = [];
 protected $fillable = ['source', 'details'];
 protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];
 public function profiles() {
  return $this->hasMany(entourage_profile::class);
 }
}