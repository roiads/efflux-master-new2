<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class menu extends Model {
	public $timestamps = true;
	protected $connection = 'content';
	protected $table = 'content.menus';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'menu'];
	protected $hidden = ['created_at', 'updated_at'];
	public function domains() {
		return $this->hasMany(domain::class);
	}
}
