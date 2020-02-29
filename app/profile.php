<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model {
	public $timestamps = true;
	protected $table = 'accounts.profiles';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['status', 'firstname', 'lastname', 'dob', 'gender', 'country', 'city', 'post_code'];
	protected $hidden = ['created_at', 'updated_at'];
	public function accounts() {
		return $this->hasMany(account::class);
	}
}