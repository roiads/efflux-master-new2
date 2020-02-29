<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class user extends Authenticatable {
	use Notifiable;
	public $timestamps = true;
	protected $table = 'users.users';
	protected $guarded = [];
	protected $attributes = ['first_name' => '', 'last_name' => '', 'username' => '', 'roles'];
	protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password'];
	protected $hidden = ['password', 'remember_token', 'created_at', 'updated_at'];
	protected $casts = ['email_verified_at' => 'datetime'];
	public function roles() {
		return $this->belongsToMany(role::class, 'users.user_role', 'user_id', 'role_id');
	}
}
