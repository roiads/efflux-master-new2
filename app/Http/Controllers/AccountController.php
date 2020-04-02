<?php
namespace App\Http\Controllers;
use App\account;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller {
	private $userID;
	public function __construct(){
		$this->middleware('auth');
	}
	public function index() {
		$accounts = user::find(Auth::id())->accounts()->paginate(5);
		dd($accounts);
		return response()->json($accounts);
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(account $account) {
		return $account;
	}
	public function edit(account $account) {}
	public function update(Request $request, account $account) {}
	public function destroy(account $account) {}
}
