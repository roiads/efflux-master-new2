<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable {

  use FormAccessible;
	use Notifiable;

  public $timestamps = true;
  protected $table = 'users.users';
  protected $guarded = [];
  protected $attributes = [
		'first_name'=>'',
		'last_name'=>'',
		'username'=>''];
	protected $fillable = [
		'first_name',
		'last_name',
		'username',
		'email',
		'password',
	];
	protected $hidden = [
		'password',
		'remember_token',
	];
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}
