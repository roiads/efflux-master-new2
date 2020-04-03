<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class route extends Model {
	public $timestamps = true;
	protected $connection = 'content';
	protected $table = 'domains.routes';
	protected $guarded = [];
	protected $attributes = [];
	protected $fillable = ['pattern', 'post_id'];
	protected $hidden = ['created_at', 'updated_at'];
	public function post() {
		return $this->belongsTo(post::class);
	}
	public function domains() {
		return $this->belongsToMany(domain::class, 'domains.domain_route', 'route_id', 'domain_id');
	}
}
