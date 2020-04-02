<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_type extends Model
{
	public $timestamps = true;
	protected $table = 'accounts.types';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'url','login','signup','notes'];
    protected $hidden = ['created_at', 'updated_at'];
	public function accounts() {
		return $this->hasMany(account::class,'type_id');
    }
}
