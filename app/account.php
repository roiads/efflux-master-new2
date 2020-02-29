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
}