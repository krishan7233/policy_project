<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function supervisa(){
        return view('super-visa-insurance');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function quotation(){
        return view('quotes');
    }
	
	public function insuranceplan(){
        return view('plan');
    }
    public function findQuotation(Request $req){
        if($req->pre_exit==0){
        $exit_or_not="NOT";
        }else{
        $exit_or_not="YES";
        }
        $CompanyDetail =[];
        $price= $this->addDollarSign($req->covrage_amt);
        $data['companies'] = DB::table('tbl_companies')
        ->join('tbl_aggregate_policy_limit', 'tbl_companies.id', '=', 'tbl_aggregate_policy_limit.c_id')
        ->join('tbl_age_group', 'tbl_companies.id', '=', 'tbl_age_group.c_id')
        ->where('tbl_aggregate_policy_limit.price',$price)
        ->where('tbl_age_group.start_age', '<=', $req->age)
        ->where('tbl_age_group.end_age', '>=', $req->age)
        ->select('tbl_companies.id as company_id',
        'tbl_companies.company_name',
        'tbl_companies.status',
        'tbl_companies.created_at', 
        'tbl_companies.updated_at', 
        'tbl_companies.photo', 
        'tbl_aggregate_policy_limit.price',
        'tbl_age_group.start_age',
        'tbl_age_group.end_age',
        'tbl_aggregate_policy_limit.id as aggregate_id',
        'tbl_age_group.id as age_id'
        )
        ->get();
        foreach($data['companies'] as $company){
            $data['rates'] = DB::table('tbl_rates')
            ->where('c_id',$company->company_id)
            ->where('age_id',$company->age_id)
            ->where('aggregate_id',$company->aggregate_id)
            ->where('pre_exit',$req->pre_exit)
            ->get();
            foreach($data['rates'] as $rates){
                if($rates->rate!="$0"){
                    $CompanyDetail[]=(object)[
                        'company_id'=>$company->company_id,
                        'company_name'=>$company->company_name,
                        'company_status'=>$company->status,
                        'company_photo'=>$company->photo,
                        'company_created_at'=>$company->created_at,
                        'company_updated_at'=>$company->updated_at,
                        'aggregate_price'=>$company->price,
                        'start_age'=>$company->start_age,
                        'end_age'=>$company->end_age,
                        'aggregate_id'=>$company->aggregate_id,
                        'age_id'=>$company->age_id,
                        'pre_exit'=>$exit_or_not,
                        'rate'=>$rates->rate,
                        'plan_type'=>$rates->plan_type,
                        'no_of_days'=>$req->no_of_days,
                        'total_charge'=>$this->removeDollarSign($rates->rate)*$req->no_of_days,
                        'per_month'=>number_format($this->removeDollarSign($rates->rate)*$req->no_of_days/12,2),
                    ];  
                }

            }            
        }
        // echo"<pre>";
        $data['company_detail']=(object)$CompanyDetail;
        // echo"<pre>";
        // print_r($data['company_detail']);
        // exit;
        return view('quotes',$data);
    }
public function addDollarSign($amount) {
    $addSymbol = '$' .$amount;
    return $addSymbol;
}
public function removeDollarSign($amount)
{
    // Remove dollar sign and any commas
    $cleanedAmount = str_replace(['$', ','], '', $amount);

    // Convert the cleaned string to a float
    $numericValue = (float) $cleanedAmount;

    return $numericValue;
}    
}
