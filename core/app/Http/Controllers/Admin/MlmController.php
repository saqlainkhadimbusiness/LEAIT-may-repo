<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Ads;
use App\Models\custom_refferals_bonus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MlmController extends Controller
{
    public function plan()
    {
        $page_title = 'MLM Plans';
        $empty_message = 'No Plan found';
        $plans = Plan::paginate(getPaginate());;
        return view('admin.plan.index',['page_title'=> $page_title,'empty_message'=> $empty_message,'plans'=>$plans]);
    }

    public function ads(){
        $page_title = 'Ads Management';
        $empty_message = 'No Plan found';
        $plans = Ads::paginate(getPaginate());;
        return view('admin.ads', compact('page_title', 'plans', 'empty_message'));
    }
    public function storeads(Request $request){
        //echo "<script>alert('working)</script>";
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $rules = [
            'ad_link'=>'required|url'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            $notify[] = ['success', 'Sorry wrong url'];
           return back()->withNotify($notify);
        }
       else{
        $plan = new Ads();
//        $plan->ads_title             = $request->ad_title;
        $plan->ad_link            = $request->ad_link;
        $plan->ad_description =$request->ad_description;
//        $plan->ad_timer               = $request->ad_time;
        $plan->ad_status           = $request->status?1:0;
        $plan->save();

        $notify[] = ['success', 'New ad added successfully'];
        return back()->withNotify($notify);
       }
    }

    public function updateads(Request $request)
    {
       $rules = [
            'ad_link'=>'required|url'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            $notify[] = ['success', 'Sorry wrong url'];
           return back()->withNotify($notify);
        }
        else{
        $plan= Ads::find($request->id);
//        $plan->ads_title             = $request->ad_title;
        $plan->ad_link            = $request->ad_link;
//        $plan->ad_description =$request->ad_description;
//        $plan->ad_timer               = $request->ad_time;
        $plan->ad_status           = $request->status?1:0;
        $plan->update();
        $notify[] = ['success', 'Ad Updated Successfully.'];
        return back()->withNotify($notify);
        }
    }


    public function planStore(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'price'             => 'required|numeric|min:0',
            'total_ads'=>'required|integer|min:1',
            'bv'                => 'required|min:0|integer',
            'ref_com'           => 'required|numeric|min:0',
            'tree_com'          => 'required|numeric|min:0',
        ]);


        $plan = new Plan();
        $plan->name             = $request->name;
        $plan->price            = $request->price;
        $plan->total_ads =$request->total_ads;
        $plan->bv               = $request->bv;
        $plan->ref_com          = $request->ref_com;
        $plan->tree_com         = $request->tree_com;
        $plan->status           = $request->status?1:0;
        $plan->save();

        $data = $request->all();
        for ($a = 0; $a < count($request->input('custom_ref_com')); $a++) {
            $crb = new custom_refferals_bonus();
            $crb->plan_id = $plan->id;
            $crb->referred_by_plan_id = $data['reffer_person'][$a];
            $crb->custom_reffer_com = $data['custom_ref_com'][$a];
            $crb->custom_cycler_com = $data['custom_cyc_com'][$a];
            $crb->save();
        }
        $notify[] = ['success', 'New Plan created successfully'];
        return back()->withNotify($notify);
    }


    public function planUpdate(Request $request)
    {

        $this->validate($request, [
            'id'                => 'required',
            'name'              => 'required',
            'price'             => 'required|numeric|min:0',
            'total_ads'=>'required|integer|min:1',
            'bv'                => 'required|min:0|integer',
            'ref_com'           => 'required|numeric|min:0',
            'tree_com'          => 'required|numeric|min:0',
        ]);

        $plan                   = Plan::find($request->id);
        $plan->name             = $request->name;
        $plan->price            = $request->price;
         $plan->total_ads =$request->total_ads;
        $plan->bv               = $request->bv;
        $plan->ref_com          = $request->ref_com;
        $plan->tree_com         = $request->tree_com;
        $plan->status           = $request->status?1:0;
        $plan->save();

        custom_refferals_bonus::where('plan_id',$request->id)->delete();
        $data = $request->all();
        if($request->input('update_custom_ref_com')){
            for ($a = 0; $a < count($request->input('update_custom_ref_com')); $a++) {
                $crb = new custom_refferals_bonus();
                $crb->plan_id = $plan->id;
                $crb->referred_by_plan_id = $data['update_reffer_person'][$a];
                $crb->custom_reffer_com = $data['update_custom_ref_com'][$a];
                $crb->custom_cycler_com = $data['update_custom_cyc_com'][$a];
                $crb->save();
            }
        }

        $notify[] = ['success', 'Plan Updated Successfully.'];
        return back()->withNotify($notify);
    }



    public function matchingUpdate(Request $request)
    {
        $this->validate($request, [
            'bv_price' => 'required|min:0',
            'total_bv' => 'required|min:0|integer',
            'max_bv' => 'required|min:0|integer',
        ]);

        $setting = GeneralSetting::first();

        if ($request->matching_bonus_time == 'daily') {
            $when = $request->daily_time;
        } elseif ($request->matching_bonus_time == 'weekly') {
            $when = $request->weekly_time;
        } elseif ($request->matching_bonus_time == 'monthly') {
            $when = $request->monthly_time;
        }


        $setting->bv_price = $request->bv_price;
        $setting->total_bv = $request->total_bv;
        $setting->max_bv = $request->max_bv;
        $setting->cary_flash = $request->cary_flash;
        $setting->matching_bonus_time = $request->matching_bonus_time;
        $setting->matching_when = $when;
        $setting->save();

        $notify[] = ['success', 'Matching bonus has been updated.'];
        return back()->withNotify($notify);

    }
    public function Custom_ref_bonus_edit(Request $request){
        $plan_id= $request->input('plan_id');
        return custom_refferals_bonus::where('plan_id',$plan_id)->get();

    }




}
