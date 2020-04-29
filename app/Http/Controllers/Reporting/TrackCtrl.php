<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use GeoIp2\WebService\Client as ipChecker;
use Illuminate\Http\Request;

class TrackCtrl extends Controller {

 private $user_ip;
 private $cid; // campaign id
 private $sid; // sub id
 private $action; // action to record

 private $request;
 private $ipChecker;

 public function __construct(Request $R) {
  $this->request = $R;
  $this->uri     = trim($R->getPathInfo(), '/');
  $this->host    = $_SERVER['HTTP_HOST'];
  $this->user_ip = $_SERVER['REMOTE_ADDR'];
 }
 /**
  * track
  */
 public function track(Request $R) {
  $details = $MM->examine($IP);

  // WHat are the variables that are expected as part of the tracking request?
  $this->cid = $R->cid ?? null;
  $this->sid = $this->saveAction($type, $this->uri, $details);

  $details = $this->examine();
  $result  = $this->cloak($details);
  $this->trackIt($this->action ?? 'visit');
  return $result;
 }

 /**
  * report
  */
 public function examine(ipCheck $ipCheck) {
  $ID  = config('MAXMIND_ID');
  $KEY = config('MAXMIND_Key');
  if (!$ID || !$KEY) {
   return false;
  }

  $this->ipChecker = new ipChecker($ID, $KEY);
  $record          = $this->GeoIp->insights($ip);
  $r['ip']         = $ip;
  $r['user_agent'] = @$_SERVER['HTTP_USER_AGENT'];
  $r['referrer']   = @$_SERVER['HTTP_REFERER'];
  $r['isp']        = $record->traits->isp;
  $r['network']    = $record->traits->network;
  $r['domain']     = $record->traits->domain;
  $r['user_type']  = $record->traits->userType;
  $r['city']       = $record->city->name;
  $r['country']    = $record->country->isoCode;
  return $r;
 }

 /**
  * cloak
  */
 public function cloak($details) {

 }
 /**
  * record
  */
 public function record($action, $uri, $x) {
  $f['action']     = $action;
  $f['uri']        = $uri;
  $f['ip']         = $x['ip'];
  $f['user_type']  = $x['user_type'];
  $f['city']       = $x['city'];
  $f['country']    = $x['country'];
  $f['user_agent'] = $x['user_agent'];
  $f['referrer']   = $x['referrer'];
  $f['isp']        = $x['isp'];
  $f['network']    = $x['network'];
  $f['domain']     = $x['domain'];
  dd($f);
  return 0;
  //$r = Action::create($field);
  //return $r->id;
 }
}