<?php

namespace App\Http\Controllers;

class CloakCtrl extends Controller {

 protected $cloak = true;
 protected $log   = array();

 public function __construct($details) {
  $this->details = $details;
  $this->runCloaker();
  return [$this->cloak, $this->log];
 }
 public function runCloaker() {
  $this->campagin();
  $this->blacklist();
  $this->user_type();
  $this->isp();
  $this->location();
  $this->revisit();
 }
 public function user_type() {
  $user_type = $this->details['user_type'];
  if ($user_type !== 'residential') {
   $this->log('User Type: ' . $user_type);
   $this->cloak = false;
  }
 }
 public function campagin() {}
 public function blacklist() {}
 public function isp() {}
 public function location() {}
 public function revisit() {}
 public function log($log) {
  $this->log[] = $log;
 }
}