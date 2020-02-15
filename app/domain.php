<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class domain extends Model {

  use FormAccessible;

  public $timestamps = true;

  protected $table = 'domains.domains';

  protected $guarded = [];
  protected $attributes = [
    'notes' => '...',
    'status' => 1,
  ];
  protected $fillable = [
    'name',
    'notes',
    'status',
    'registrar_id'
  ];
  protected $hidden = [
    'created_at',
    'updated_at',
  ];
  public function registrar() {
    return $this->belongsTo(registrar::class);
  }
  public function routes() {
    return $this->hasMany(route::class);
  }
  public function subdomains() {
    return $this->hasMany(subdomain::class);
  }
}
