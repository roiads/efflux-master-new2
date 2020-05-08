<?php
namespace App\Http\Controllers\Users;
use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserCtrl extends Controller {
    public function index() {
        $users = User::with('roles')->get();
        return $users;
    }
    public function create(Request $request) {

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:mysql.efflux_users.users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ])->validate();
        list($fisrtname, $lastname) = @explode(' ', $request['name'], 2);
        return user::create([
            'fisrtname' => $fisrtname,
            'lastname' => $lastname,
            'email' => $request['email'],
            'username' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);*
    }
    public function store(Request $request) {
        if($request->ajax()) {
            try {

                dd($request->input());
                die;

                $user = User::create([
                    'firstname' => $request->input('first_name'),
                    'lastname' => $request->input('last_name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                ]);

                $selected_roles = $request->input('selected_roles');

            } catch(\Exception $ex) {
                $response = ['success' => false];
            }

            return $response;
        }
    }
    public function show($id) {
        $r = user::with('roles')->find($id);
        return response()->json($r);
    }
    public function edit(user $user) {}
    public function update(Request $request, user $user) {}
    public function destroy(user $user) {}
}