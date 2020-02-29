<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class domain extends Model {
	public $timestamps = true;
	protected $table = 'domains.domains';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'path', 'registrar_id'];
	protected $hidden = ['created_at', 'updated_at'];
	public function registrar() {
		return $this->belongsTo(registrar::class);
	}
	public function routes() {
		return $this->hasMany(route::class);
	}
	public function subdomains() {
		return $this->hasMany(subdomain::class);
	}
}