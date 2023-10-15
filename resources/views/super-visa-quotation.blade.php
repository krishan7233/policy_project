@extends('layout.commonlayout')
@section('content')
<!-- Form section start here -->
<div class="section-larger">
@php
$deductible = Session::get('deductible');
@endphp
<div class="container">
	<div class="row">
    	<div class="col-lg-12">
        	<div class="get-email">
            	<a href="#">Email/Text Details</a>
            </div>
        </div>
    </div>
</div>

  <div class="container mt-60">
    <div class="row">
      <div class="col-lg-4">
        <div class="quote-left">
      


          <p>Super Visa Insurance for Single Person(age 60 years) for 365 days, excluding coverage for pre-existing medical conditions <a href="{{url('super-visa')}}"><span><i class="fa fa-pencil"></i></span></a></p>
          <div class="form-field-row">
            <div class="coverage"> <span>Deductible  </span>
              <select class="form-control super-couple-deductible-amt" name="deductible_amt">
              <option value="0" {{ $deductible['deductible1'] == 0 ? 'selected' : '' }}>0</option>
              <option value="100" {{ $deductible['deductible1'] == 100 ? 'selected' : '' }}>100</option>
              <option value="250" {{ $deductible['deductible1'] == 250 ? 'selected' : '' }}>250</option>
              <option value="500" {{ $deductible['deductible1']== 500 ? 'selected' : '' }}>500</option>
              <option value="1000" {{ $deductible['deductible1'] == 1000 ? 'selected' : '' }}>1000</option>
              <option value="2500" {{ $deductible['deductible1'] == 2500 ? 'selected' : '' }}>2500</option>
              <option value="5000" {{ $deductible['deductible1'] == 5000 ? 'selected' : '' }}>5000</option>
              <option value="10000" {{ $deductible['deductible1'] == 10000 ? 'selected' : '' }}>10000</option>
              </select>
            </div>
          </div>
          <div class="form-field-row">
            <div class="coverage"> <span>Coverage List 1</span>
              <select class="form-control  super-couple-coverage-amt1" name="coverage_amt1">
                <option value="100000" {{$deductible['coverage_amt1']==100000 ? 'selected' : ''}}>100,000</option>
                <option value="150000" {{$deductible['coverage_amt1']==150000 ? 'selected' : ''}}>150,000</option>
                <option value="200000" {{$deductible['coverage_amt1']==200000 ? 'selected' : ''}}>200,000</option>
                <option value="250000" {{$deductible['coverage_amt1']==250000 ? 'selected' : ''}}>250,000</option>
                <option value="300000" {{$deductible['coverage_amt1']==300000 ? 'selected' : ''}}>300,000</option>
                <option value="500000" {{$deductible['coverage_amt1']==500000 ? 'selected' : ''}}>500,000</option>
                <option value="1000000" {{$deductible['coverage_amt1']==1000000 ? 'selected' : ''}}>1,000,000</option>
              </select>
            </div>
          </div>
          <div class="form-field-row">
            <div class="coverage"> <span>Coverage List 2</span>
              <select class="form-control  super-couple-coverage-amt2" name="coverage_amt2">
                <option value="100000" {{$deductible['coverage_amt2']==100000 ? 'selected' : ''}}>100,000</option>
                <option value="150000" {{$deductible['coverage_amt2']==150000 ? 'selected' : ''}}>150,000</option>
                <option value="200000" {{$deductible['coverage_amt2']==200000 ? 'selected' : ''}}>200,000</option>
                <option value="250000" {{$deductible['coverage_amt2']==250000 ? 'selected' : ''}}>250,000</option>
                <option value="300000" {{$deductible['coverage_amt2']==300000 ? 'selected' : ''}}>300,000</option>
                <option value="500000" {{$deductible['coverage_amt2']==500000 ? 'selected' : ''}}>500,000</option>
                <option value="1000000" {{$deductible['coverage_amt2']==1000000 ? 'selected' : ''}}>1,000,000</option>
              </select>
            </div>
          </div>
          <h6>Would you like to cover pre-existing medical conditions?</h6>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="super_couple_exit1" class="custom-control-input " value="0" {{$deductible['pre_exit1']==0 ? 'checked' : ''}}>
            <label class="custom-control-label" for="not_exit1">No</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="exit1" name="super_couple_exit1" class="custom-control-input" value="1" {{$deductible['pre_exit1']==1 ? 'checked' : ''}}>
            <label class="custom-control-label" for="exit1">Yes</label>
          </div></br>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="not_exit2" name="super_couple_exit2" class="custom-control-input" value="0" {{$deductible['pre_exit2']==0 ? 'checked' : ''}}>
            <label class="custom-control-label" for="not_exit2">No</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="exit2" name="super_couple_exit2" class="custom-control-input" value="1" {{$deductible['pre_exit2']==1 ? 'checked' : ''}}>
            <label class="custom-control-label" for="exit2">Yes</label>
          </div>
        </div>
      </div>
      <div class="col-lg-8 quotation_data">
      @foreach($company_detail as $companies)
        @php
        if(empty($companies->id1) || empty($companies->id2)){
            continue;
        }
        if(!empty($companies->id1)){
        $id1 = $companies->id1;
        $tamt1 = number_format($companies->total_charge1 - $companies->detect_amt1, 2);
        $company_name1 = $companies->company_name1;
        $company_status1 = $companies->company_status1;
        $company_photo1 = $companies->company_photo1;
        $aggregate_price1 = $companies->aggregate_price1;
        $start_age1 = $companies->start_age1;
        $end_age1 = $companies->end_age1;
        $aggregate_id1 = $companies->aggregate_id1;
        $age_id1 = $companies->age_id1;
        $pre_exit1 = $companies->pre_exit1;
        $plan_type1 = $companies->plan_type1;
        $no_of_days1 = $companies->no_of_days1;
        $total_charge1 = $companies->total_charge1;
        $per_month1 = $companies->per_month1;
        $deductible_amt1 = $companies->deductible_amt1;
        $sur_charge1 = $companies->sur_charge1;
        $detect_amt1 = $companies->detect_amt1;
        }else{
        $id1=$tamt1=$company_name1=$company_status1=$company_photo1=$aggregate_price1=$start_age1=$end_age1=$aggregate_id1=$age_id1=$pre_exit1=
        $plan_type1=$no_of_days1=$total_charge1=$per_month1=$total_charge1=$deductible_amt1=$sur_charge1=$detect_amt1=0;
        }
        if(!empty($companies->id2)){
        $id2 = $companies->id2;
        $tamt2 = number_format($companies->total_charge2 - $companies->detect_amt2, 2);
        $company_name2 = $companies->company_name2;
        $company_status2 = $companies->company_status2;
        $company_photo2 = $companies->company_photo2;
        $aggregate_price2 = $companies->aggregate_price2;
        $start_age2 = $companies->start_age2;
        $end_age2 = $companies->end_age2;
        $aggregate_id2 = $companies->aggregate_id2;
        $age_id2 = $companies->age_id2;
        $pre_exit2 = $companies->pre_exit2;
        $plan_type2 = $companies->plan_type2;
        $no_of_days2 = $companies->no_of_days2;
        $total_charge2 = $companies->total_charge2;
        $per_month2 = $companies->per_month2;
        $deductible_amt2 = $companies->deductible_amt2;
        $sur_charge2 = $companies->sur_charge2;
        $detect_amt2 = $companies->detect_amt2;
        }else{
        $id2=$tamt2=$company_name2=$company_status2=$company_photo2=$aggregate_price2=$start_age2=$end_age2=$aggregate_id2=$age_id2=$pre_exit2=
        $plan_type2=$no_of_days2=$total_charge2=$per_month2=$total_charge2=$deductible_amt2=$sur_charge2=$detect_amt2=0;
        }
        $sum_total_amt = number_format(($companies->total_charge1 - $companies->detect_amt1)+($companies->total_charge2 - $companies->detect_amt2),2);
        @endphp

      <div class="quote-right">
          <div class="quote-box">
            <div class="logo-section"> <img src="{{$company_photo1}}" /> </div>
            <div class="price-section">
               
              <h3>{{'$'.$tamt1}}</h3></br>
              <h3>{{'$'.$tamt2}}</h3>
              <p>Total : <strong>{{$sum_total_amt}}</strong></p>
              <h3><span><strong>{{'$'.$per_month1}}</strong>/month</span></h3>
              <h3><span>Deductible <strong>{{$deductible_amt1}}</strong> per claim {{$sur_charge1}}</span></h3>
            </div>
            <div class="btn-section"> <a href="#" class="buy-now">BUY NOW</a> 
            <a href="#" class="plan-details toggle togglePlanDetails" id="toggle" onclick="togglePlanDetails_{{$id1}}({{$id1}})">PLAN DETAILS</a>
              <div class="compaire">
                <div class="left">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Compare</label>
                </div>
                <div class="right"> <a href="#">Benefit Summary</a> </div>
              </div>
            </div>
          </div>
          <div id="text{{$id1}}" style="display:none;" class="hidden-plan-details">
            <div class="row">
              <div class="col-lg-4">
                <div class="section1">
                  <h4>Summary</h4>
                  <p>Coverage 1: {{$aggregate_price1}}</p>
                  <p>Coverage 2: {{$aggregate_price2}}</p>
                  <p> Deductible: {{$deductible_amt1}}</p>
                  <p>Period: {{$no_of_days1}} days</p>
                  <p> Pre-existing medical conditions: <b>{{$pre_exit1}}</b> covered</p>
                  <p> Pre-existing medical conditions: <b>{{$pre_exit2}}</b> covered</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="section2">
                  <ul>
                    <li>Hospitalization:-<strong>Covered</strong></li>
                    <li> Covid 19 Coverage:-<strong>Covered</strong></li>
                    <li> Ambulance Fee:-<strong>Covered</strong></li>
                    <li> Walk-in Clinic Visit:-<strong>Covered</strong></li>
                    <li> Prescriptions Drugs:-<strong>Covered</strong></li>
                    <li>Dental Pain Relief:- <strong>Not Covered</strong></li>
                    <li> Accidental Death:-Not <strong>Covered</strong></li>
                    <li> Cremation/Burial:-<strong>Covered</strong></li>
                    <li>Paramedical Services:-<strong>Covered</strong></li>
                    <li> Side Trips:-<strong>Only Within Canada</strong> </li>
                  </ul>
                  <p><em>*Important notice:   The above is only a Summary of Benefits; for complete details, refer to <a href="#">Policy Wording.</a></em></p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="section3"> <a href="tel:6475709070" class="call-btn"><i class="fa fa-mobile"></i> (647) 570-9070</a> <a href="#" class="benifit-sumry">Benefit Summary</a> <a href="#" class="srt-app">Start Application</a> </div>
              </div>
            </div>
          </div>
        </div>
        <script>
          function togglePlanDetails_{{$id1}}(id) {
            $('#text' + id).toggle();  // Assuming 'id' is a variable containing the desired ID

          }
        </script>
      @endforeach
      </div>
      <div class="col-lg-8 quotation_filter_data"></div>
    </div>
  </div>
</div>
<!-- Form section Ends here -->



@endsection 