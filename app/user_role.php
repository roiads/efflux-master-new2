<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class user_role extends Model {
	use FormAccessible;
	public $timestamps = true;
	protected $table = 'efflux_users.roles';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'description'];
	protected $hidden = ['created_at', 'updated_at'];
	public function users() {
		return $this->belongsToMany(user::class, 'efflux_users.user_role', 'role_id', 'user_id');
	}
}
