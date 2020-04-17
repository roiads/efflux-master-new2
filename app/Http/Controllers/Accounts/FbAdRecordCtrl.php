<?php

namespace App\Http\Controllers\Accounts;

use App\FbAd;
use App\FbAdAccount;
use App\FbAdRecord;
use App\FbAdSet;
use App\FbCampaign;
use App\FbProfile;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FbAdRecordCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FbAdRecord::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = $request->all();
            $errors = 0;
            foreach($data['csv'] as &$post){
                $adset = FbAdSet::where('id', $post['Ad Set ID'])->first();
                if(!FbAd::where('id', $post['Ad ID'])->exists()){
                    if($adset === null){
                        if(!FbCampaign::where('id', $post['Campaign ID'])->exists()){
                            if(!FbAdAccount::where('id', $post['Account ID'])->exists()){
                                if(!FbProfile::where('business_id', $data['business_id'])->exists()){
                                    $profile = FbProfile::where('ml_profile_id', $data['profile_id'])->first();
                                    $profile->business_id = $data['business_id'];
                                    $profile->save();
                                }
                                FbAdAccount::create(array('id' => $post['Account ID'], 'name' => $post['Account Name'], 'business_id' => $data['business_id']));
                            }
                            FbCampaign::create(array('id'=> $post['Campaign ID'], 'name' => $post['Campaign Name'], 'account_id' => $post['Account ID']));
                        }
                        FbAdSet::create(array('id' => $post['Ad Set ID'], 'campaign_id' => $post['Campaign ID'], 'name' => $post['Ad Set Name'], 'budget' => $post['Ad Set Budget']));
                    }
                    FbAd::create(array('id' => $post['Ad ID'], 'budget' => $post['Ad Set Budget'], 'adSet_id'=> $post['Ad Set ID'], 'started_at' => $post['Day'], 'ended_at' => $post['Day'], 'name' => $post['Ad Name']));
                }
                if($adset !== null  && $adset->budget != $post['Ad Set Budget']){
                    $adset->budget = $post['Ad Set Budget'];
                    $adset->save();
                }
                try{
                    FbAdRecord::create(array('ad_id' => $post['Ad ID'], 'from' => $post['Day'], 'to' => $post['Day'], 'budget' => $post['Ad Set Budget'], 'results' => $post['Clicks (All)'], 'reach' => $post['Reach'], 'impressions' => $post['Impressions'], 'spent' => $post['Amount Spent (USD)'], 'likes' => $post['Page Likes']));
                } catch(Exception $e) {
                    $errors++;
                }
            }
            return Response()->json(array('errors' => $errors), $errors === 0 ? 200 : 202);
        } catch(Exception $e) {
            return Response()->json(array('success' => false, 'message'=> $e->getMessage()), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FbAdRecord::where('ad_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
