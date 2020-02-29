<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class subdomain extends Model {
	public $timestamps = true;
	protected $table = 'domains.subdomains';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['name', 'domain_id'];
	protected $hidden = ['created_at', 'updated_at'];
	public function domain() {
		return $this->belongsTo(domain::class);
	}
}