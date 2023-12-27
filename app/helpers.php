<?php 
use Illuminate\Support\Facades\DB;
function removeSign($amount){
    $cleanedAmount = str_replace(['$', ','], '', $amount);

    // Convert the cleaned string to a float
    $numericValue = (float) $cleanedAmount;

    return $numericValue;
}
function companyName($id){
$company = DB::table('tbl_companies')->select('id','company_name','basic','standard','enhanced','formula','day_discount','visa_type_permission','per_plicy_claim')->where('id',$id)->where('status',1)->first();
return $company;
}
//id wise age detail
function findAge($id){
    $query = DB::table('tbl_age_group')->select('id','start_age','end_age')->where('id',$id)->where('status',1)->first();
    return $query;    
}
function findAggregate($id){
    $query = DB::table('tbl_aggregate_policy_limit')->select('id','price')->where('id',$id)->where('status',1)->first();
    return $query;    
}
function allCompany(){
    $company = DB::table('tbl_companies')->select('id','company_name')->where('status',1)->get();
    return $company;
}
function detectibleList($id){
    $query = DB::table('tbl_deductible')->where('status',1)->where('c_id',$id)->get();
    return $query;
}
function planType($plan_type){
    if($plan_type==1){
        $type = "Basic";
    }else if($plan_type==2){
        $type = "Standard";
    }else{
        $type = "Enhanced"; 
    }
    return $type;
}
function companyWiseAggregatePrice($id){
$query = DB::table('tbl_aggregate_policy_limit')->where('c_id',$id)->get();



return $query;
}

function companyWiseAgeGroup($id){
$query = DB::table('tbl_age_group')->where('c_id',$id)->get();
return $query;
}
function companyWiseDetectible($id){
    // exit($id);
$query = DB::table('tbl_deductible')->where('c_id',$id)->get();
return $query;
}
function detectible($company_id,$age_id){
    $query = DB::table('tbl_age_group')->where('id',$age_id)->where('c_id',$company_id)->first();
    $start_age  = $query->start_age;
    $end_age  = $query->end_age;

    $query1 = DB::table('tbl_deductible')->where('start_age', '<=',$start_age)->where('end_age', '>=',$end_age)->where('c_id',$company_id)->get();
   return $query1; 
}
function findRate($id){
    $query = DB::table('tbl_rates')->where('id',$id)->first();
    return $query;
}
function companyId($id){
    // return"fdsf";
    $query = DB::table('tbl_companies')->select('company_name')->where('id',$id)->where('status',1)->first();
    return $query->company_name;
}
?>