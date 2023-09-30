@extends('layout.commonlayout')
@section('content')
<!-- Form section start here -->
<div class="section-larger">

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
          <p>Super Visa Insurance for Single Person(age 60 years) for 365 days, excluding coverage for pre-existing medical conditions <a href="#"><span><i class="fa fa-pencil"></i></span></a></p>
          <div class="form-field-row">
            <div class="coverage"> <span>Deductible</span>
              <select class="form-control">
                <option value="0">0</option>
                <option value="100">100</option>
                <option value="250">250</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2500">2500</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
              </select>
            </div>
          </div>
          <div class="form-field-row">
            <div class="coverage"> <span>Coverage</span>
              <select class="form-control">
                <option value="100000">100,000</option>
                <option value="150000">150,000</option>
                <option value="200000">200,000</option>
                <option value="250000">250,000</option>
                <option value="300000">300,000</option>
                <option value="500000">500,000</option>
                <option value="1000000">1,000,000</option>
              </select>
            </div>
          </div>
          <h6>Would you like to cover pre-existing medical conditions?</h6>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked="" wfd-id="id7">
            <label class="custom-control-label" for="customRadioInline1">No</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" wfd-id="id8">
            <label class="custom-control-label" for="customRadioInline2">Yes</label>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
      @foreach($company_detail as $companies)
        <div class="quote-right">
          <div class="quote-box">
            <div class="logo-section"> <img src="{{$companies->company_photo}}" /> </div>
            <div class="price-section">
              <h3>{{'$'.$companies->total_charge}}</h3>
              <h3><span><strong>{{'$'.$companies->per_month}}</strong>/month</span></h3>
              <h3><span>Deductible <strong>0</strong> per claim</span></h3>
            </div>
            <div class="btn-section"> <a href="#" class="buy-now">BUY NOW</a> 
            <a href="#" class="plan-details toggle" id="toggle" onclick="togglePlanDetails({{$companies->company_id}})">PLAN DETAILS</a>
              <div class="compaire">
                <div class="left">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Compare</label>
                </div>
                <div class="right"> <a href="#">Benefit Summary</a> </div>
              </div>
            </div>
          </div>
          <div id="text{{$companies->company_id}}" style="display:none;" class="hidden-plan-details">
            <div class="row">
              <div class="col-lg-4">
                <div class="section1">
                  <h4>Summary</h4>
                  <p>Coverage: {{$companies->aggregate_price}}</p>
                  <p> Deductible: 0</p>
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
                  <p><em>*Important notice: The above is only a Summary of Benefits; for complete details, refer to <a href="#">Policy Wording.</a></em></p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="section3"> <a href="tel:6475709070" class="call-btn"><i class="fa fa-mobile"></i> (647) 570-9070</a> <a href="#" class="benifit-sumry">Benefit Summary</a> <a href="#" class="srt-app">Start Application</a> </div>
              </div>
            </div>
          </div>
        </div>
        <script>
          function togglePlanDetails(id) {
            // alert(id);
            $('#text' + id).toggle();  // Assuming 'id' is a variable containing the desired ID

          }
        </script>
      @endforeach
      </div>
    
    </div>
  </div>
</div>
<!-- Form section Ends here -->
@endsection