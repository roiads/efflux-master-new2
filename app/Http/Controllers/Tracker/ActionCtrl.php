<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use App\Http\Controller\Tracker\CloakCtrl as Cloak;
use App\Models\Tracker\Action;
use GeoIp2\WebService\Client as ipChecker;
use Illuminate\Http\Request;

class ActionCtrl extends Controller {

 private $user_ip;
 private $user_details;
 private $cid; // campaign id
 private $sid; // sub id
 private $action;
 private $request;
 private $ipChecker;

 public function __construct(Request $R) {
  $this->request = $R;
  $this->uri     = trim($R->getPathInfo(), '/');
  $this->host    = $_SERVER['HTTP_HOST'];
  $this->user_ip = $_SERVER['REMOTE_ADDR'];
  $this->action  = $R->action ?? 'visit';
  $this->cid     = $R->cid ?? null;
  $this->sid     = $R->sid ?? null;
 }
 /**
  * Setup the API to MaxMind IP Insights
  */
 public function ipChecker_setup() {
  $ID  = config('MAXMIND_ID') ?? 105994;
  $KEY = config('MAXMIND_KEY') ?? 'Eh5m8iQCRk9rtoW2';
  if (!$ID || !$KEY) {
   return false;
  }
  $this->ipChecker = new ipChecker($ID, $KEY);
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
  $x                  = $this->ipChecker->insights($this->user_ip);
  $r['ip']            = $this->user_ip;
  $r['user_agent']    = @$_SERVER['HTTP_USER_AGENT'];
  $r['referrer']      = @$_SERVER['HTTP_REFERER'];
  $r['isp']           = $x->traits->isp;
  $r['network']       = $x->traits->network;
  $r['domain']        = $x->traits->domain;
  $r['user_type']     = $x->traits->userType;
  $r['city']          = $x->city->name;
  $r['country']       = $x->country->isoCode;
  $this->user_details = $r;
  return $r;
 }
 /**
  * record
  */
 public function record($action, $uri, $x) {
  $field['action']     = $action;
  $field['uri']        = $uri;
  $field['ip']         = $x['ip'];
  $field['user_type']  = $x['user_type'];
  $field['city']       = $x['city'];
  $field['country']    = $x['country'];
  $field['user_agent'] = $x['user_agent'];
  $field['referrer']   = $x['referrer'];
  $field['isp']        = $x['isp'];
  $field['network']    = $x['network'];
  $field['domain']     = $x['domain'];
  $r                   = Action::create($field);
  return $r->id;
 }
 /**
  * cloak
  */
 public function cloak($details) {
  if ($this->cloak === true) {
   return new Cloak($details);
  }
 }
}