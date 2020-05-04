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

 public function parseArgs(&$args) {
  if (!empty($args)) {
   $args = str_replace('/', '|', $args);
   $args = explode('|', $args);
   foreach ($args as $arg) {
    if (stristr($arg, '=')) {
     list($k, $v) = explode('=', $arg, 2);
     $_[$k]       = $v;
    } else {
     $_[] = $arg;
    }
   }
  }
  return $_ ?? [];
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