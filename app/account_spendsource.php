<?php
namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class account_spendsource extends Model {
 use FormAccessible;
 use SoftDeletes;
 public $timestamps  = true;
 protected $table    = 'efflux_accounts.spendsources';
 protected $guarded  = [];
 protected $fillable = ['source', 'details'];
 protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];
 public function profiles() {
  return $this->hasMany(account_profile::class);
 }
}