<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use GeoIp2\WebService\Client as ipChecker;
use Illuminate\Http\Request;

class TrackCtrl extends Controller {

 private $user_ip;
 private $user_details;
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
  // WHat are the variables that are expected as part of the tracking request?
  $this->action = $R->action ?? 'visit';
  $this->cid    = $R->cid ?? null;
  $this->sid    = $R->sid ?? null;
 }
 public function ipChecker_setup() {
  $ID  = config('MAXMIND_ID') ?? 105994;
  $KEY = config('MAXMIND_KEY') ?? 'Eh5m8iQCRk9rtoW2';
  if (!$ID || !$KEY) {
   return false;
  }
  $ipChecker       = new ipChecker($ID, $KEY);
  $this->ipChecker = $ipChecker;
  return $ipChecker;
 }
 /**
  * track
  */
 public function track(Request $R) {
  $this->examine($this->user_ip);

  $this->record($this->action, $this->uri, $this->user_details);

  $result = $this->cloak($this->user_details);
  return $result;
 }
 /**
  * examine
  */
 public function examine() {
  $ipChecker          = $this->ipChecker_setup();
  $record             = $ipChecker->insights($this->user_ip);
  $r['ip']            = $this->user_ip;
  $r['user_agent']    = @$_SERVER['HTTP_USER_AGENT'];
  $r['referrer']      = @$_SERVER['HTTP_REFERER'];
  $r['isp']           = $record->traits->isp;
  $r['network']       = $record->traits->network;
  $r['domain']        = $record->traits->domain;
  $r['user_type']     = $record->traits->userType;
  $r['city']          = $record->city->name;
  $r['country']       = $record->country->isoCode;
  $this->user_details = $r;
  return $r;
 }

 /**
  * cloak
  */
 public function cloak($details) {
  if ($details['user_type'] == 'server') {
   $details['state'] = "dirty";
  }
  $details['state'] = "safe";
  return $details;
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
  return 0;
  //$r = Action::create($field);
  //return $r->id;
 }
}