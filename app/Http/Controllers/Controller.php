<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

 use AuthorizesRequests;
 use DispatchesJobs;
 use ValidatesRequests;

 public $errors = [];

 public function parseArgs(&$A) {
  if (!empty($A)) {
   $A = str_replace('/', '|', $A);
   $A = explode('|', $A);
   foreach ($A as $a) {
    if (stristr($a, '=')) {
     list($k, $v) = explode('=', $a, 2);
     $_[$k]       = $v;
    } else {
     $_[] = $a;
    }
   }
  }
  return $_;
 }
 public function anyErrors() {
  if (empty($this->errors)) {
    unset($this->errors);
   return false;
  }
  $e = implode($this->errors);
  return response($e, 412);
 }
 public function error($msg) {
  $this->errors[] = $msg;
  return false;
 }
}