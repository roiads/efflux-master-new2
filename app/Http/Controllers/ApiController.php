<?php

namespace App\Http\Controllers;
use \App\Api\System1Api;
use Illuminate\Http\Request;

class ApiController extends Controller {

    public function __invoke(Request $request, $name, $args = null) {
        $this->parseArgs($args);
        if (!method_exists($this, $name)) {
            $this->error('Invalid API Name Request');
        }
        return $this->anyErrors() ?: $this->$name($args);
    }

    public function System1($args) {
        $type = $args['type'] ?? $args[0] ?? null;
        $System1 = new System1Api($type);
        return response()->json($System1);
    }
}