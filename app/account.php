<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model {
	public $timestamps = true;
	protected $table = 'accounts.accounts';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['username', 'password', 'email', 'type', 'profile_id'];
	protected $hidden = ['created_at', 'updated_at'];

	public function profile() {
		return $this->belongsTo(profile::class);
	}
	public function type() {
		return $this->belongsTo(account_type::class);
	}
	public function users() {
		return $this->belongsToMany(user::class,'user_account','account_id','user_id');
	}
}