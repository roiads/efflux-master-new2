<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class account_type extends Model
{
	use FormAccessible;
	public $timestamps = true;
	protected $table = 'efflux_accounts.types';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'url','login_url','signup_url','logo'];
    protected $hidden = ['created_at', 'updated_at'];
	public function accounts() {
		return $this->hasMany(account::class,'type_id');
    }
}
