<?php
namespace App\Http\Controllers;
use App\Model;
use Illuminate\Http\Request;

class ModelCtrl extends Controller {
 // Display a listing of the resource.
 public function index() {}
 // Show the form for creating a new resource.
 public function create() {}
 // Store a newly created resource in storage.
 public function store(Request $r) {}
 // Display the specified resource.
 public function show(Model $m) {}
 // Show the form for editing the specified resource.
 public function edit(Model $m) {}
 // Update the specified resource in storage.
 public function update(Request $r, sModel $m) {}
 // Remove the specified resource from storage.
 public function destroy(Model $m) {}
}