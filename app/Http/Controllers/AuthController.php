<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        // Session::put('request_data', $req->all());

        $sessionData = [
            'date_of_birth'=>$req->date_of_birth,
            'age'=>$req->age,
            'start_date'=>$req->start_date,
            'end_date'=>$req->end_date,
            'no_of_days'=>$req->no_of_days,
        ];
        $data = [
            'covrage_amt'=>$req->covrage_amt,
            'pre_exit'=>$req->pre_exit,
            'deductible'=>0,
        ];
        Session::put('request_data', $sessionData);
        $data['company_detail']=$this->calculationFilter($data);
        return view('quotes',$data);
    }

    public function calculationFilter($data){
        $requestData = Session::get('request_data');
        $pre_exit =$data['pre_exit']; 
        $covrage_amt =$data['covrage_amt']; 
        $age =$requestData['age']; 
        $no_of_days =$requestData['no_of_days']; 
        $deductible =$data['deductible']; 


        if($pre_exit==0){
        $exit_or_not="NOT";
        }else{
        $exit_or_not="YES";
        }
            $CompanyDetail =[];
            $price= $this->addDollarSign($covrage_amt);
            $data['companies'] = DB::table('tbl_companies')
            ->join('tbl_aggregate_policy_limit', 'tbl_companies.id', '=', 'tbl_aggregate_policy_limit.c_id')
            ->join('tbl_age_group', 'tbl_companies.id', '=', 'tbl_age_group.c_id')
            ->join('tbl_deductible', 'tbl_companies.id', '=', 'tbl_deductible.c_id')
            ->where('tbl_aggregate_policy_limit.price',$price)
            ->where('tbl_age_group.start_age', '<=', $age)
            ->where('tbl_age_group.end_age', '>=', $age)
            ->where('tbl_aggregate_policy_limit.price',$price)
            ->where('tbl_deductible.start_age', '<=', $age)
            ->where('tbl_deductible.end_age', '>=', $age)
            ->where('tbl_deductible.end_age', '>=', $age)
            ->where('tbl_deductible.deductible_amt',$deductible)
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
            'tbl_age_group.id as age_id',
            'tbl_deductible.deductible_amt',
            'tbl_deductible.sur_charge',
            )
            ->get();
            $CompanyDetail = []; // Initialize an empty array to store unique entries

            foreach ($data['companies'] as $company) {
                $data['rates'] = DB::table('tbl_rates')
                    ->where('c_id', $company->company_id)
                    ->where('age_id', $company->age_id)
                    ->where('aggregate_id', $company->aggregate_id)
                    ->where('pre_exit', $pre_exit)
                    ->get();
            
                foreach ($data['rates'] as $rates) {
                    if ($rates->rate != "$0") {
                        $tamt = $this->removeDollarSign($rates->rate) * $no_of_days;
            
                        if ($company->sur_charge == "B" || $company->sur_charge == "NA") {
                            $sur_charge = 0;
                        } else {
                            $sur_charge = $company->sur_charge;
                        }
            
                        // Create a unique key based on company_id and rate
                        $uniqueKey = $company->company_id . '_' . $rates->rate;
            
                        // Check if this key already exists in the $CompanyDetail array
                        if (!isset($CompanyDetail[$uniqueKey])) {
                            // Add the details to the $CompanyDetail array
                            $CompanyDetail[$uniqueKey] = (object)[
                                'id' => $rates->id,
                                'company_id' => $company->company_id,
                                'company_name' => $company->company_name,
                                'company_status' => $company->status,
                                'company_photo' => $company->photo,
                                'company_created_at' => $company->created_at,
                                'company_updated_at' => $company->updated_at,
                                'aggregate_price' => $company->price,
                                'start_age' => $company->start_age,
                                'end_age' => $company->end_age,
                                'aggregate_id' => $company->aggregate_id,
                                'age_id' => $company->age_id,
                                'pre_exit' => $exit_or_not,
                                'rate' => $rates->rate,
                                'plan_type' => $rates->plan_type,
                                'no_of_days' => $no_of_days,
                                'total_charge' => $tamt,
                                'per_month' => number_format($tamt / 12, 2),
                                'deductible_amt' => $company->deductible_amt,
                                'sur_charge' => $sur_charge,
                                'detect_amt' => ($sur_charge / 100) * $tamt,
                            ];
                        }
                    }
                }
            }
            
            // Convert the unique entries back to a simple array
            $uniqueCompanyDetailArray = array_values($CompanyDetail);
            // In this modified version, we use $company->company_id and $rates->rate to create a unique key
            // $uniqueCompanyDetails = array_values(array_unique(array_column($CompanyDetail, 'id')));

            return (object)$uniqueCompanyDetailArray;
    }

public function deductibleFilter(Request $req){
    $requestData = Session::get('request_data');
    $deductible = $req->deductible;
    $coverage = $req->coverage;
    $pre_exit = $req->check_exit;
    $data=[
        'deductible'=>$deductible,
        'covrage_amt'=>$coverage,
        'pre_exit'=>$pre_exit,
    ];
    $data['company_detail']=$this->calculationFilter($data);
    $html = '';
        foreach ($data['company_detail'] as $companies) {
            $html .= '<div class="quote-right"> <div class="quote-box"> <div class="logo-section"> <img src="'.$companies->company_photo.'" /> </div> <div class="price-section"> <h3>'.'$'.number_format($companies->total_charge - $companies->detect_amt, 2).'</h3> <h3><span><strong>'.'$'.$companies->per_month.'</strong>/month</span></h3> <h3><span>Deductible <strong>'.$companies->deductible_amt.'</strong> per claim '.$companies->sur_charge.'</span></h3> </div> <div class="btn-section"> <a href="#" class="buy-now">BUY NOW</a> <a href="#" class="plan-details toggle" id="toggle" onclick="togglePlanDetails('.$companies->company_id.')">PLAN DETAILS</a> <div class="compaire"> <div class="left"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Compare</label> </div> <div class="right"> <a href="#">Benefit Summary</a> </div> </div> </div> </div> <div id="filter_data'.$companies->company_id.'" style="display:none;" class="hidden-plan-details"> <div class="row"> <div class="col-lg-4"> <div class="section1"> <h4>Summary</h4> <p>Coverage: '.$companies->aggregate_price.'</p> <p> Deductible: '.$companies->deductible_amt.'</p> <p>Period: '.$companies->no_of_days.' days</p> <p> Pre-existing medical conditions: <b>'.$companies->pre_exit.'</b> covered</p> </div> </div> <div class="col-lg-4"> <div class="section2"> <ul> <li>Hospitalization:-<strong>Covered</strong></li> <li> Covid 19 Coverage:-<strong>Covered</strong></li> <li> Ambulance Fee:-<strong>Covered</strong></li> <li> Walk-in Clinic Visit:-<strong>Covered</strong></li> <li> Prescriptions Drugs:-<strong>Covered</strong></li> <li>Dental Pain Relief:- <strong>Not Covered</strong></li> <li> Accidental Death:-Not <strong>Covered</strong></li> <li> Cremation/Burial:-<strong>Covered</strong></li> <li>Paramedical Services:-<strong>Covered</strong></li> <li> Side Trips:-<strong>Only Within Canada</strong> </li> </ul> <p><em>*Important notice: The above is only a Summary of Benefits; for complete details, refer to <a href="#">Policy Wording.</a></em></p> </div> </div> <div class="col-lg-4"> <div class="section3"> <a href="tel:6475709070" class="call-btn"><i class="fa fa-mobile"></i> (647) 570-9070</a> <a href="#" class="benifit-sumry">Benefit Summary</a> <a href="#" class="srt-app">Start Application</a> </div> </div> </div> </div> </div>';
        }
        $html .= <<<HTML
        <script>
            function togglePlanDetails(id) {
                $('#filter_data' + id).toggle();
            }
        </script>
        HTML;
        return $html;
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
