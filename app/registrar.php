<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class registrar extends Model {

  use FormAccessible;
  use SoftDeletes;

  public $timestamps = true;

  protected $table = 'domains.registrars';
  protected $softDelete = true;

  protected $guarded = [];
  protected $attributes = [
    'notes' => '...',
    'status' => 1,
  ];
  protected $fillable = [
    'name',
    'username',
    'password',
    'notes',
    'status'
  ];
  protected $hidden = [
    'deleted_at',
    'created_at',
    'updated_at',
  ];
  public function routes() {
    return $this->hasMany(domain::class);
  }
}
