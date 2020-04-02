<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class user extends Authenticatable {
	use Notifiable;
	public $timestamps = true;
	protected $table = 'users.users';
	protected $guarded = [];
	protected $attributes = ['last_name' => ''];
	protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password'];
	protected $hidden = ['password', 'remember_token', 'created_at', 'updated_at'];
	protected $casts = ['email_verified_at' => 'datetime'];
	public function roles() {
		return $this->belongsToMany(role::class, 'users.user_role', 'user_id', 'role_id');
	}
	public function accounts(){
		return $this->belongsToMany(account::class, 'users.user_account', 'user_id', 'account_id');
	}
	public function domains(){
		return $this->belongsToMany(domain::class, 'users.user_domain', 'user_id', 'domain_id');
	}
}
