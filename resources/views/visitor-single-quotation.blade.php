@extends('layout.commonlayout')
@section('content')

<!-- Form section start here -->
<div class="section-larger">
@php
$deductible = Session::get('single_deduct');
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
          <p>Super Visa Insurance for Single Person(age 60 years) for 365 days, excluding coverage for pre-existing medical conditions <a href="{{url('visitor-visa-insurance')}}"><span><i class="fa fa-pencil"></i></span></a></p>
          <div class="form-field-row">
            <div class="coverage"> <span>Deductible</span>
              <select class="form-control visitor-single-deductible-amt">
                <option value="0" {{ $deductible['deductible'] == 0 ? 'selected' : '' }}>0</option>
                <option value="100" {{ $deductible['deductible'] == 100 ? 'selected' : '' }}>100</option>
                <option value="250" {{ $deductible['deductible'] == 250 ? 'selected' : '' }}>250</option>
                <option value="500" {{ $deductible['deductible'] == 500 ? 'selected' : '' }}>500</option>
                <option value="1000" {{ $deductible['deductible'] == 1000 ? 'selected' : '' }}>1000</option>
                <option value="2500" {{ $deductible['deductible'] == 2500 ? 'selected' : '' }}>2500</option>
                <option value="5000" {{ $deductible['deductible'] == 5000 ? 'selected' : '' }}>5000</option>
                <option value="10000" {{ $deductible['deductible'] == 10000 ? 'selected' : '' }}>10000</option>
              </select>
            </div>
          </div>
          <div class="form-field-row">
            <div class="coverage"> <span>Coverage</span>
              <select class="form-control  visitor-single-coverage-amt">
                <option value="15000" {{ $deductible['coverage_amt'] == 15000 ? 'selected' : '' }}>15,000</option>
                <option value="25000" {{ $deductible['coverage_amt'] == 25000 ? 'selected' : '' }}>25,000</option>
                <option value="50000" {{ $deductible['coverage_amt'] == 50000 ? 'selected' : 'selected' }}>50,000</option>
                <option value="100000" {{ $deductible['coverage_amt'] == 100000 ? 'selected' : '' }}>100,000</option>
                <option value="150000" {{ $deductible['coverage_amt'] == 150000 ? 'selected' : '' }}>150,000</option>
                <option value="200000" {{ $deductible['coverage_amt'] == 200000 ? 'selected' : '' }}>200,000</option>
                <option value="250000" {{ $deductible['coverage_amt'] == 250000 ? 'selected' : '' }}>250,000</option>
                <option value="300000" {{ $deductible['coverage_amt'] == 300000 ? 'selected' : '' }}>300,000</option>
                <option value="500000" {{ $deductible['coverage_amt'] == 500000 ? 'selected' : '' }}>500,000</option>
                <option value="1000000" {{ $deductible['coverage_amt'] == 1000000 ? 'selected' : '' }}>1,000,000</option>
              </select>
            </div>
          </div>
          <h6>Would you like to cover pre-existing medical conditions?</h6>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="visitor_single_exit" class="custom-control-input" value="0" {{ $deductible['pre_exit'] == 0 ? 'checked' : '' }}>
            <label class="custom-control-label" for="customRadioInline1">No</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="visitor_single_exit" class="custom-control-input" value="1" {{ $deductible['pre_exit'] == 1 ? 'checked' : '' }}>
            <label class="custom-control-label" for="customRadioInline2">Yes</label>
          </div>
        </div>
      </div>
      <div class="col-lg-8 quotation_data">
      @foreach($company_detail as $companies)
      @php
        if($companies->plan_type==1){
          $photo = $companies->basic;
        }
        if($companies->plan_type==2){
          $photo = $companies->standard;
        }
        if($companies->plan_type==3){
          $photo = $companies->enhanced;
        }
        @endphp
        <div class="quote-right">
          <div class="quote-box">
            <div class="logo-section"> <img src="{{$photo}}" /> </div>
            <div class="price-section">
              <h3>{{'$'.number_format($companies->total_charge - $companies->detect_amt, 2)}}</h3>
              <h3><span><strong>{{'$'.$companies->per_month}}</strong>/month</span></h3>
              <h3><span>Deductible <strong>{{$companies->deductible_amt}}</strong> per claim {{$companies->sur_charge}}</span></h3>
            </div>
            <div class="btn-section"> <a href="#" class="buy-now">BUY NOW</a> 
            <a href="#" class="plan-details toggle togglePlanDetails" id="toggle" onclick="togglePlanDetails_{{$companies->id}}({{$companies->id}})">PLAN DETAILS</a>
              <div class="compaire">
                <div class="left">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Compare</label>
                </div>
                <div class="right"> <a href="#">Benefit Summary</a> </div>
              </div>
            </div>
          </div>
          <div id="text{{$companies->id}}" style="display:none;" class="hidden-plan-details">
            <div class="row">
              <div class="col-lg-4">
                <div class="section1">
                  <h4>Summary</h4>
                  <p>Coverage: {{$companies->aggregate_price}}</p>
                  <p> Deductible: {{$companies->deductible_amt}}</p>
                  <p>Period: {{$companies->no_of_days}} days</p>
                  <p> Pre-existing medical conditions: <b>{{$companies->pre_exit}}</b> covered</p>
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
          function togglePlanDetails_{{$companies->id}}(id) {
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