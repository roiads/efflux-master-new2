<?php
namespace App\Http\Controllers\Tracker;
use App\Http\Controllers\Controller;
use App\Models\Tracker\Blacklist;
use Illuminate\Http\Request;

class BlacklistController extends Controller {
 public function index() {}
 public function store(Request $R) {
  // VALIDATE THE REQUEST HERE !!!
  $ip = $R->ip ? ip2long($R->ip) : null;
  if (!$ip) {
   return response('invalid ip', 412);
  }
  $bl['id']    = $ip;
  $bl['end']   = $R->end ? ip2long($R->end) : null;
  $bl['label'] = $R->label ?? null;
  $bl          = Blacklist::create($bl);
 }
 public function show(Blacklist $bl) {
  return $bl;
 }
 public function update(Request $R, Blacklist $bl) {
  // VALIDATE THE REQUEST HERE !!!
  $ip = $R->ip ? ip2long($R->ip) : null;
  if ($ip) {
   $bl = Blacklist::findOrFail($ip);
   if (isset($R->end)) {
    $bl->end = ip2long($R->end);
   }
   if (isset($R->label)) {
    $bl->label = $R->label;
   }
   $bl->save();
  }
  return response('invalid ip', 412);
 }
 public function destroy(Blacklist $bl) {}
}