<?php

namespace App\Http\Controllers\Accounts;

use App\FbAd;
use App\FbAdRecord;
use App\FbAdSet;
use App\FbCampaign;
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
            foreach($data as &$post){
                $adset = FbAdSet::where('id', $post['Ad Set ID'])->first();
                if(!FbAd::where('id', $post['Ad ID'])->exists()){
                    if($adset === null){
                        if(!FbCampaign::where('id', $post['Campaign ID'])->exists()){
                            FbCampaign::create(array('id'=> $post['Campaign ID'], 'name' => $post['Campaign Name'], 'account_id' => $post['Account ID']));
                        }
                        FbAdSet::create(array('id' => $post['Ad Set ID'], 'campaign_id' => $post['Campaign ID'], 'name' => $post['Ad Set ID'], 'budget' => $post['Ad Set Budget']));
                    }
                    FbAd::create(array('id' => $post['Ad ID'], 'adSet_id'=> $post['Ad Set ID'], 'created_at' => Date::yesterday(), 'name' => $post['Ad Name']));
                }
                if($adset !== null  && $adset->budget != $post['Ad Set Budget']){
                    $adset->budget = $post['Ad Set Budget'];
                    $adset->save();
                }
                $errors = $errors + FbAdRecord::create($post) ? 1 : 0;
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
