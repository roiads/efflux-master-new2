<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\account_type;

class AccountTypeController extends Controller
{
    public function index(){
        $r  = account_type::withCount('accounts')->paginate(10);
        return  response()->json($r);
    }
    public function create(){

    }
    public function store(Request $request){
        
    }
    public function show($id){

    }
    public function edit($id)
    {}
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
}
