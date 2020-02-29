<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class page extends Model {
	public $timestamps = true;
	protected $table = 'content.pages';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['title', 'html', 'css', 'js'];
	protected $hidden = ['created_at', 'updated_at'];
	public function routes() {
		return $this->hasMany(route::class);
	}
	public function users() {
		return $this->belongsToMany(User::class);
	}
}
