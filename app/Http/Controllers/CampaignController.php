<?php

namespace App\Http\Controllers;

use App\campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller {
	public function index() {}
	public function create() {}
	public function store(Request $request) {}
	public function show(campaign $campaign) {}
	public function edit(campaign $campaign) {}
	public function update(Request $request, campaign $campaign) {}
	public function destroy(campaign $campaign) {}
}
