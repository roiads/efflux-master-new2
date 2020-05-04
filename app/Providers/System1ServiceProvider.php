<?php
namespace App\Providers;
use App\Http\Controllers\Controller;
use \App\Models\Reporting\System1;

class System1ServiceProvider extends Controller {

 protected $key;
 protected $url;

 public function __construct() {
  $this->key = env('SYSTEM1_KEY');
  $this->url = env('SYSTEM1_REPORTING_URL');
 }
 public function getApiReport($type = 'subid') {
  $link = 'https://' . $this->url . $type . '.json?auth_key=' . $this->key;
  $file = file_get_contents($link . '?' . $q);
  return json_decode($file);
 }
 public function import($type = 'subid') {
  $r = $this->getApiReport($type);
  if (empty($r)) {
   exit('No Report Found...');
  }
  for ($i = 1; $i < count($r); $i++) {
   $Q = System1::updateOrCreate([
    'date'            => $r[$i][0],
    'campaign_domain' => $r[$i][1],
    'subid'           => $r[$i][2],
   ], [
    'date'            => $r[$i][0],
    'campaign_domain' => $r[$i][1],
    'subid'           => $r[$i][2],
    'mobile'          => $r[$i][4],
    'mobile_unique'   => $r[$i][8],
    'desktop'         => $r[$i][5],
    'desktop_unique'  => $r[$i][9],
    'searches'        => $r[$i][11],
    'clicks'          => $r[$i][12],
    'revenue'         => $r[$i][13],
   ]
   );
  }
  return 'complete';
 }
 public function makeChart($eat) {
  $Q = System1::select('campaign_domain');
  $Q = 'test';
  return $Q;
 }
}