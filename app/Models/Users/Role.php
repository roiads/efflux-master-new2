<?php

namespace App\Models\Users;
use App\Models\Models;

class Role extends Models {

	//protected $connection = 'efflux_users';

	protected $table = config('app.name') . '_users.user_role';

	protected $fillable = ['name', 'description'];
	
	public function users() {
		return $this->belongsToMany('App\Models\Users\User', 'user_role', 'role_id', 'user_id');
	}	
}