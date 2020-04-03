<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class post extends Model {
	public $timestamps = true;
	protected $connection = 'content';
	protected $table = 'content.posts';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['title', 'active', 'html', 'css', 'js'];
	protected $hidden = ['created_at', 'updated_at'];
	public function routes() {
		return $this->hasMany(route::class);
	}
	public function users() {
		return $this->belongsToMany(user::class);
	}
}
