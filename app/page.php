<?php

namespace App;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class page extends Model {

  use FormAccessible;

  public $timestamps = true;

  protected $table = 'pages.pages';

  protected $guarded = [];
  protected $attributes = [
    'notes' => '...',
    'active' => 1,
  ];
  protected $fillable = [
    'name',
    'notes',
    'active',
    'html',
    'css',
    'js'
  ];
  protected $hidden = [
    'created_at',
    'updated_at',
  ];
}
