<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class registrar extends Model {
	public $timestamps = true;
	protected $table = 'domains.registrars';
	protected $guarded = [];
	protected $attributes = ['notes' => '...', 'status' => 1];
	protected $fillable = ['name', 'username', 'password', 'notes', 'status'];
	protected $hidden = ['created_at', 'updated_at'];
	public function domains() {
		return $this->hasMany(domain::class);
	}
}
