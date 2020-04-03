<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class cc extends Model {
	public $timestamps = true;
	protected $table = 'assets.cc';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['cc', 'type', 'exp', 'cvv'];
	protected $hidden = ['created_at', 'updated_at'];
	public function profiles() {
		return $this->hasMany(profile::class);
	}
}
