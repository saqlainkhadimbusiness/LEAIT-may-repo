<?php

namespace App\Http\Controllers;

use App\Models\BvLog;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Ads;
use App\Models\adds_status;
use App\Models\Adrevenue;
use App\Models\seen_ads;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\UserExtra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{

    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }

    function planIndex()
    {
        $data['page_title'] = "Plans";
        $data['plans'] = Plan::whereStatus(1)->get();
        return view($this->activeTemplate . '.user.plan', $data);
    }

    function ads()
    {
        $data['page_title'] = "Ads";
        $user = User::find(Auth::id());
        $planid = $user->plan_id;
        if (!empty($planid)) {
            $plan = Plan::where('id', $planid)->where('status', 1)->firstOrFail();
            $data['planname'] = $planid;
            $data['total_ads'] = $plan->total_ads;
            $Arr = array();
            $seen_add_Arr = Adrevenue::where('user_id', $user->id)->get();
            foreach ($seen_add_Arr as $key => $val) {
                $Arr[$key] = $val->ad_id;
            }
          $total_ads_block=DB::table('seen_ads')->where('user_id',$user->id)->count();
            $show_adds=$plan->total_ads-$total_ads_block;

            $data['ad_records'] = DB::select('SELECT  *
            FROM    ads
            WHERE   id NOT IN (SELECT ads_id FROM seen_ads  Where user_id  = ' . $user->id . ' ) LIMIT '.$show_adds);

        }

        $data['plans'] = Plan::whereStatus(1)->get();


        $data['ads_status'] = adds_status::where('status_id', $user->add_status_id)->first();


        $data['adRevenue']        = Adrevenue::where("user_id", auth()->user()->id)->sum("ad_revenue");
        return view($this->activeTemplate . '.user.ads', $data)->with('success', 'You successfully Watched the Adds');
    }

    function viewads($id)
    {
        $data['page_title'] = "View Ad";
        $user = User::find(Auth::id());
        $planid = $user->plan_id;
        if (!empty($planid)) {
            $plan = Plan::where('id', $planid)->where('status', 1)->firstOrFail();
            $data['planname'] = $planid;
            $data['total_ads'] = $plan->total_ads;
            $data['ad_records'] = Ads::select('*')->take($plan->total_ads)->get();
        }
        $adlink = Ads::where('id', $id)->get();
        foreach ($adlink as $adlink) {
            $data['adlink'] = $adlink->ad_link;
        }
        $data['plans'] = Plan::whereStatus(1)->get();
        $data['id'] = $id;
        return view($this->activeTemplate . '.user.viewads', $data);
    }
    function addrevenue(Request $request)
    {
        $user_id = $request->post('user_id');
        $ad_sent_id = $request->post('ad_id');
        $a = seen_ads::where('user_id', $user_id)->where('ads_id', $ad_sent_id)->get();
        if ($a->isEmpty()) {
            $plan = new Adrevenue();
            $plan->user_id = $user_id;
            $plan->ad_id = $ad_sent_id;
            $plan->ad_revenue = '0.005';
            $plan->total_price = '0.005';
            $plan->save();
            echo "saved";

            $s_ads = new seen_ads();
            $s_ads->ads_id = $ad_sent_id;
            $s_ads->user_id = $user_id;
            $s_ads->save();
        } else {
            echo "Already ad viewed";
        }
    }


    function planStore(Request $request)
    {

        $this->validate($request, ['plan_id' => 'required|integer']);
        $plan = Plan::where('id', $request->plan_id)->where('status', 1)->firstOrFail();
        $gnl = GeneralSetting::first();

        $user = User::find(Auth::id());
        if ($user->balance < $plan->price) {
            $notify[] = ['error', 'Insufficient Balance'];
            return back()->withNotify($notify);
        }
        $add_staus = new adds_status;
        $add_staus->max_views =  $plan->total_ads;
        $add_staus->save();
        seen_ads::where('user_id', $user->id)->delete();



        $oldPlan = $user->plan_id;
        $user->plan_id = $plan->id;
        $user->add_status_id = (int)$add_staus->id;
        $user->balance -= $plan->price;
        $user->total_invest += $plan->price;
        $user->save();

        $trx = $user->transactions()->create([
            'amount' => $plan->price,
            'trx_type' => '-',
            'details' => 'Purchased ' . $plan->name,
            'remark' => 'purchased_plan',
            'trx' => getTrx(),
            'post_balance' => getAmount($user->balance),
        ]);

        notify($user, 'plan_purchased', [
            'plan' => $plan->name,
            'amount' => getAmount($plan->price),
            'currency' => $gnl->cur_text,
            'trx' => $trx->trx,
            'post_balance' => getAmount($user->balance) . ' ' . $gnl->cur_text,
        ]);
        if ($oldPlan == 0) {
            updatePaidCount($user->id);
        }
        $details = Auth::user()->username . ' Subscribed to ' . $plan->name . ' plan.';
        if(is_matching_credited($user->id) && is_bonus_credited($user->id,'credit_mb')) {
            updateMatchingBonus($user->id,$details);
        }
        if(is_bonus_credited($user->id,'credit_pb')) {
            updatePairingBonus($user->id,$details);
        }
        if ($plan->tree_com > 0 &&  is_bonus_credited($user->id,'credit_drb')) {
            treeComission($user->id, $plan->tree_com, $details,$request->plan_id);
            update_credit_bonus_state($user->id,'credit_drb');
        }
    if(is_bonus_credited($user->id,'credit_cb')) {
        referralComission($user->id, $details, $request->plan_id);
        update_credit_bonus_state($user->id,'credit_cb');
    }
        $notify[] = ['success', 'Purchased ' . $plan->name . ' Successfully'];
        return redirect()->route('user.home')->withNotify($notify);
    }


    public function binaryCom()
    {
        $data['page_title'] = "Binary Commission";
        $data['logs'] = Transaction::where('user_id', auth()->id())->where('remark', 'binary_commission')->orderBy('id', 'DESC')->paginate(config('constants.table.default'));
        $data['empty_message'] = 'No data found';
        return view($this->activeTemplate . '.user.transactions', $data);
    }

    public function binarySummery()
    {
        $data['page_title'] = "Binary Summery";
        $data['logs'] = UserExtra::where('user_id', auth()->id())->firstOrFail();
        return view($this->activeTemplate . '.user.binarySummery', $data);
    }

    public function bvlog(Request $request)
    {

        if ($request->type) {
            if ($request->type == 'leftBV') {
                $data['page_title'] = "Left BV";
                $data['logs'] = BvLog::where('user_id', auth()->id())->where('position', 1)->where('trx_type', '+')->orderBy('id', 'desc')->paginate(config('constants.table.default'));
            } elseif ($request->type == 'rightBV') {
                $data['page_title'] = "Right BV";
                $data['logs'] = BvLog::where('user_id', auth()->id())->where('position', 2)->where('trx_type', '+')->orderBy('id', 'desc')->paginate(config('constants.table.default'));
            } elseif ($request->type == 'cutBV') {
                $data['page_title'] = "Cut BV";
                $data['logs'] = BvLog::where('user_id', auth()->id())->where('trx_type', '-')->orderBy('id', 'desc')->paginate(config('constants.table.default'));
            } else {
                $data['page_title'] = "All Paid BV";
                $data['logs'] = BvLog::where('user_id', auth()->id())->where('trx_type', '+')->orderBy('id', 'desc')->paginate(config('constants.table.default'));
            }
        } else {
            $data['page_title'] = "BV LOG";
            $data['logs'] = BvLog::where('user_id', auth()->id())->orderBy('id', 'desc')->paginate(config('constants.table.default'));
        }

        $data['empty_message'] = 'No data found';
        return view($this->activeTemplate . '.user.bvLog', $data);
    }

    public function myRefLog()
    {
        $data['page_title'] = "My Referral";
        $data['empty_message'] = 'No data found';
        $data['logs'] = User::where('ref_id', auth()->id())->latest()->paginate(config('constants.table.default'));
        return view($this->activeTemplate . '.user.myRef', $data);
    }

    public function myTree()
    {
        $data['tree'] = showTreePage(Auth::id());
        $data['page_title'] = "My Tree";
        return view($this->activeTemplate . 'user.myTree', $data);
    }


    public function otherTree(Request $request, $username = null)
    {
        if ($request->username) {
            $user = User::where('username', $request->username)->first();
        } else {
            $user = User::where('username', $username)->first();
        }
        if ($user && treeAuth($user->id, auth()->id())) {
            $data['tree'] = showTreePage($user->id);
            $data['page_title'] = "Tree of " . $user->fullname;
            return view($this->activeTemplate . 'user.myTree', $data);
        }

        $notify[] = ['error', 'Tree Not Found or You do not have Permission to view that!!'];
        return redirect()->route('user.my.tree')->withNotify($notify);
    }
      public function ads_status(Request $request)
    {

        $user = User::find(Auth::id());
        $user_id = $request->input('user_id');
        $ad_sent_id = $request->input('add_id');
        $a = seen_ads::where('user_id', $user_id)->where('ads_id', $ad_sent_id)->get();
        if ($a->isEmpty()) {
            $plan = new Adrevenue();
            $plan->user_id = $user_id;
            $plan->ad_id = $ad_sent_id;
            $plan->ad_revenue = '0.005';
            $plan->total_price = '0.005';
            $plan->save();
            echo "saved";

            $s_ads = new seen_ads();
            $s_ads->ads_id = $ad_sent_id;
            $s_ads->user_id = $user_id;
            $s_ads->save();

            $revenueStatus = true;

            $ads_status = adds_status::where('status_id', $user->add_status_id)->orderBy('status_id', 'DESC')->first();
            $today = new DateTime("today");
            $diff = $today->diff($ads_status->updated_at);
            $diffDays = (int)$diff->format("%R%a");
            if ($diffDays == 0) {
                $today_views = $ads_status->today_views + 1;
            } else {
                $today_views = 1;
            }
            $total_views = $ads_status->total_views + 1;
            $seenStatus = DB::table('adds_statuses')
                ->where('status_id', $user->add_status_id)
                ->update([
                    'total_views' =>  $total_views,
                    'today_views' =>  $today_views,
                    'updated_at' =>  Carbon::now()->toDateTimeString(),

                ]);
        } else {
            echo "Already ad viewed";
            $revenueStatus = false;
            $seenStatus=false;
        }


        if ($revenueStatus && $seenStatus) {
            session(['add_watched' => 1]);
        } else {
            session(['add_watched' => 0]);
        }
        echo '<style>
    body {
        background-color: black;
    }

    div {
        display: block;
        margin: auto;
        width: 40%;
        padding-top: 20%;
    }
</style>
<div>
    <h2 style="color:white">Hold Tight We Are Updating Your Ads Earning</h2>
</div>';

        return redirect(route('user.ads'));
    }
}
