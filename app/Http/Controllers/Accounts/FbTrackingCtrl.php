<?php
namespace App\Http\Controllers\Accounts;

use App\FbAdAccount;
use App\FbProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FbTrackingCtrl extends Controller {
    public function getAllInformation() {
        return DB::table('efflux_entourage.FbAdRecord')
            ->join('efflux_entourage.FbAd', 'efflux_entourage.FbAdRecord.ad_id', '=', 'efflux_entourage.FbAd.id')
            ->join('efflux_entourage.FbAdSet', 'efflux_entourage.FbAd.adSet_id', '=', 'efflux_entourage.FbAdSet.id')
            ->join('efflux_entourage.FbCampaign', 'efflux_entourage.FbAdSet.campaign_id', '=', 'efflux_entourage.FbCampaign.id')
            ->join('efflux_entourage.FbAdAccount', 'efflux_entourage.FbCampaign.account_id', '=', 'efflux_entourage.FbAdAccount.id')
            ->join('efflux_entourage.FbProfile', 'efflux_entourage.FbAdAccount.business_id', '=', 'efflux_entourage.FbProfile.business_id')
            ->select('efflux_entourage.FbAdRecord.ad_id', 'efflux_entourage.FbAdRecord.from', 'efflux_entourage.FbAdRecord.to', 'efflux_entourage.FbAdRecord.budget as recorded_budget', 'efflux_entourage.FbAdRecord.results', 'efflux_entourage.FbAdRecord.reach', 'efflux_entourage.FbAdRecord.impressions', 'efflux_entourage.FbAdRecord.spent', 'efflux_entourage.FbAdRecord.likes', 'efflux_entourage.FbAd.name as ad_name', 'efflux_entourage.FbAdSet.id as adset_id', 'efflux_entourage.FbAdSet.name as adset_name', 'efflux_entourage.FbAdSet.budget as adset_budget', 'efflux_entourage.FbCampaign.id as campaign_id', 'efflux_entourage.FbCampaign.name as campaign_name', 'efflux_entourage.FbAdAccount.id as ad_account_id', 'efflux_entourage.FbAdAccount.name as ad_account_name', 'efflux_entourage.FbAdAccount.business_id', 'efflux_entourage.FbProfile.fullname as profile_name')
            ->get();
    }
}