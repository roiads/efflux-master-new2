<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class cc extends Model {

  use FormAccessible;

  public $timestamps = true;
  protected $table = 'accounts.cc';
  protected $guarded = [];
  protected $attributes = [];
  protected $fillable = [
    'cc',
    'exp',
    'cvv'
  ];
  protected $hidden = [
    'created_at',
    'updated_at',
  ];
  public function accounts() {
    return $this->hasMany(account::class);
  }
}
