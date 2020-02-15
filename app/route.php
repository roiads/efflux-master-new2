<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class route extends Model {

  use FormAccessible;

  public $timestamps = true;

  protected $table = 'domains.routes';

  protected $guarded = [];
  protected $attributes = [
    'status' => 1,
  ];
  protected $fillable = [
    'route',
    'domain_id',
    'status',
    'page_id'
  ];
  protected $hidden = [
    'created_at',
    'updated_at',
  ];
  public function domain() {
    return $this->belongsTo(domain::class);
  }
  public function page() {
    return $this->belongsTo(page::class);
  }
}
