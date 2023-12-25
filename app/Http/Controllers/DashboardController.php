<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['title'] = "Dashboard";
        $data['all_registration'] =  0;//DB::table('registration')->count();
        $data['pending_registration'] =0; //  DB::table('registration')->where('approval',1)->count();
        $data['approval_registration'] = 0;// DB::table('registration')->where('approval',2)->count();
        $data['not_approval_registration'] = 0;// DB::table('registration')->where('approval',3)->count();



        return view('backend.index',$data);
    }
    public function registrationList(){
        $company_id = request('company_id');
        $type = request('type');
        $exit = request('exit');

        $data['title'] = "Registration List";
        $query= DB::table('tbl_rates')->select('id','c_id','age_id','aggregate_id','pre_exit','rate','status','plan_type');
        if($company_id){
            $query->where('c_id',$company_id);
        }
        if($type){
            $query->where('plan_type',$type);
        }
        if($exit){
            if($exit==1){
                $exit =0;
            }else{
                $exit=1;
            }
            $query->where('pre_exit',$exit);
        }
        $data['registers'] = $query->limit(10)->get();
        
        return view('backend.rate-list',$data);

    }
    public function registrationUpdateStatus(Request $req){
        $message = "";
        $queries = DB::table('registration') ->where('id', $req->id) ->update([ 'approval' => $req->approval]);
        if($queries){
            $message = "Registration approval  status updated successfully."; 
            Session::flash('success', $message);

            return response()->json([
                'status'=>true,
                'code'=>200,
                'type'=>"success",
                'message' => $message,
            ]);
        }
        $message = "Oops! Something went wrong.";
        Session::flash('error', $message);

        return response()->json([
            'status'=>false,
            'code'=>403,
            'type'=>"error",
            'message' => $message,
        ]);
    }

    public function amountDetectibleList($id){
        $data['title'] = "Detectible List";
        $data['detect_list'] = detectibleList($id);
        $data['company_name']=companyName($id)->company_name;

        return view('backend.detectible-list',$data);
    }
}
