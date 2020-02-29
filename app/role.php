<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class role extends Model {
	public $timestamps = true;
	protected $table = 'users.roles';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'description'];
	protected $hidden = ['created_at', 'updated_at'];
	public function users() {
		return $this->belongsToMany(user::class, 'users.user_role', 'role_id', 'user_id');
	}
}
