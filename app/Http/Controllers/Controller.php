<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public $errors = [];

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