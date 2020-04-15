<?php
namespace App\Http\Controllers\Accounts;

use App\FbAdAccount;
use App\FbProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FbTrackingCtrl extends Controller {
    public function getAllProfiles() {
        return FbProfile::all();
    }
    public function getAllAccountsFromProfile(Request $req, $business_id){
        return FbAdAccount::where('business_id', $business_id)->get();
    }
}