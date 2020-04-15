<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FbProfile extends Model {
 use FormAccessible;
 public $timestamps    = true;
 protected $table      = 'efflux_accounts.fbprofile';
 protected $guarded    = [];
 protected $attributes = [];
 protected $fillable   = ['business_id', 'username', 'password', 'fullname', 'gender'];
 protected $hidden     = ['created_at', 'updated_at'];
 public function FbAdAccounts() {
  return $this->hasMany(FbAdAccount::class);
 }
}