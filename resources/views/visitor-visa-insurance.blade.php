@extends('layout.commonlayout')
@section('content')
<!-- Form section start here -->
<style>
        /* Add margin to the labels */
        .form-check-label {
            margin-right: 20px; /* Adjust the margin as needed */
        }

        /* Make labels bold */
        .form-check-label {
            font-weight: bold;
        }
    </style>
<div class="section-larger">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <nav class="policy-form">
          <h6>What type of policy do you want?</h6>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <div class="form-check">
        <input type="radio" class="form-check-input visitor" id="visitor-single-coverage" name="visitor_policy" value="visitor1" checked>
        <label class="form-check-label" for="visitor-single-coverage">SINGLE COVERAGE</label>

        <input type="radio" class="form-check-input visitor" id="visitor-couple-policy" name="visitor_policy" value="visitor2" >
        <label class="form-check-label" for="visitor-couple-policy">COUPLE POLICY</label>

        <input type="radio" class="form-check-input visitor" id="visitor-family-coverage" name="visitor_policy" value="visitor3">
        <label class="form-check-label" for="visitor-family-coverage">FAMILY COVERAGE</label>

    </div>
</div>
</nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane show active fade  visitor-form1" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="form-1" action="{{url('visitor-single-coverage-get-quotation')}}" method="post">
              @csrf
            <div class="form-field-row">
            @php
                $currentDate = \Carbon\Carbon::now()->subYears(40);
            @endphp
            <div class="field-dob">
                <span>Date of Birth</span>
                <input type="date" id="singledob" class="form-control singledob" name="date_of_birth" placeholder="Date of Birth" data-date="" data-date-format="DD MMMM YYYY" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label>DD-MM-YYYY format</label>
            </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                  <span>Age</span>
                  <input type="number" class="form-control ageInput" id="ageInput" name="age" value="35">
                  <label>years</label>

              </div>
            </div>
            <div id="errorDiv" style="color: red;"></div>
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" class="form-control visitor-single-pilicy-start-date"  name="start_date" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" class="startFormattedDateLabel">DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(90)->format('Y-m-d');
                ?>
                <span>End Date</span>
                <input type="date" class="form-control visitor-single-pilicy-end-date" name="end_date" placeholder="Start Date" value="{{$futureDate}}">
                <label id="startFormattedDateLabel" class="startFormattedDateLabel">DD-MM-YYYY format</label>
            </div>
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control visitor-couple-single-day" value="90" name="no_of_days">
                    <label></label>
                </div>
            </div>
            
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control" name="coverage_amt">
                        <option value="10000">10,000 </option>
                        <option value="15000">15,000</option>
                        <option value="25000">25,000</option>
                        <option value="50000" selected>50,000</option>
                        <option value="100000">100,000</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="250000">250,000</option>
                        <option value="300000">300,000</option
                        ><option value="500000">500,000</option>
                        <option value="1000000">1,000,000</option>
                    </select>
                </div>
            </div>
               
            <p>Would you like to cover pre-existing medical conditions?</p>
            
            
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="pre_exit" class="custom-control-input" value="0" checked>
              <label class="custom-control-label" for="customRadioInline1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="pre_exit" class="custom-control-input" value="1">
              <label class="custom-control-label" for="customRadioInline2">Yes</label>
            </div>
            
            
            <input type="submit" value="GET QUOTE" class="quote">
              
            </form>
          </div>
          <div class="tab-pane show fade visitor-form2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          	<form class="form-1">
            <div class="form-field-row">
            <div class="number">1</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control visitor-couple-policy-date1" placeholder="Date of Birth" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control visitor-couple-policy-year1" value="22">
                    <label>years</label>
                    
                </div>
            </div>
            <p id="errorcouplepolicy1" style="color: red;"></p>

            <div class="form-field-row">
            <div class="number2">2</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control visitor-couple-policy-date2" placeholder="Date of Birth" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control visitor-couple-policy-year2" value="30" oninput="couplePolicyValidateAge2()">
                    <label>years</label>

                </div>

            </div>        
            <p id="errorcouplepolicy2" style="color: red;"></p>            
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" class="form-control visitor-couple-start-date1" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" >DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(90)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" class="form-control visitor-couple-end-date1" placeholder="End Date" value="{{ $futureDate }}">
                <label id="">DD-MM-YYYY format</label>
            </div>

                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control visitor-couple-days1" value="90">
                    <label></label>
                </div>
            </div>
            
            
           	<div class="seconddate">
            	<div class="form-field-row">
            	<div class="sdate">
                	 <span>Start Date</span>

                	<input type="date" class="form-control visitor-couple-start-date2" placeholder="Date of Birth" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(90)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                	 <span>End Date</span>
                	<input type="date"  class="form-control visitor-couple-end-date2" placeholder="Date of Birth" value="{{ $futureDate }}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>

                	<input type="number" class="form-control visitor-couple-days2" value="90">
                    <label>Days</label>
                </div>
            </div>
            </div>
            <a class="seconddate-toggle" href="javascript: void(0)">+ Enter different dates per applicant</a>
            					 
            
            
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control">
                    	<option value="100000">100,000 (min. requirement)</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="300000">300,000</option>
                        <option value="500000">500,000</option>
                        <option value="1000000">1,000,000</option>
                    </select>  
                </div> 
            </div>
            
            
            <div class="otheramt">
            	<div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control">
                    	<option value="100000">100,000 (min. requirement)</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="300000">300,000</option>
                        <option value="500000">500,000</option>
                        <option value="1000000">1,000,000</option>
                    </select>  
                </div> 
            </div>
            </div>
            <a class="otheramt-toggle" href="javascript: void(0)">+ Enter different coverage amount per applicant</a>
            
            
               
            <p>Would you like to cover pre-existing medical conditions?</p>
            
            <div class="row">
            <div class="col-lg-12">
            <div class="m1">
            <div class="number">1</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit1" name="customRadioInline1" class="custom-control-input" checked>
              <label class="custom-control-label" for="visitor-couple-exit1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit2" name="customRadioInline1" class="custom-control-input" >
              <label class="custom-control-label" for="visitor-couple-exit2">Yes</label>
            </div>
            </div>
            </div>
            </div>
            
            
            
           <div class="row">
            <div class="col-lg-12">
             <div class="m1">
            <div class="number2">2</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit3" name="customRadioInline2" class="custom-control-input" checked>
              <label class="custom-control-label" for="visitor-couple-exit3">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit4" name="customRadioInline2" class="custom-control-input">
              <label class="custom-control-label" for="visitor-couple-exit4">Yes</label>
            </div>
            </div>
            </div>
            </div>
            
            
            <input type="submit" value="GET QUOTE" class="quote">
              
            </form>
            	
          </div>
          <div class="tab-pane show fade visitor-form3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          	<form class="form-1">
            <div class="form-field-row">
            <div class="number">1</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control visitor-family-policy-date1" placeholder="Date of Birth" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control visitor-family-policy-year1" value="35">
                    <label>years</label>
                    
                </div>
            </div>
            <p id="errorcouplepolicy1" style="color: red;"></p>

            <div class="form-field-row">
            <div class="number2">2</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control visitor-family-policy-date2" placeholder="Date of Birth" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control visitor-family-policy-year2" value="30">
                    <label>years</label>

                </div>

            </div>        
            <p id="errorcouplepolicy2" style="color: red;"></p>
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>No of dependents</span>
                    <select class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    </select>  
                </div> 
            </div>
            
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" class="form-control visitor-family-start-date" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" >DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(90)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" class="form-control visitor-family-end-date" placeholder="End Date" value="{{ $futureDate }}">
                <label id="">DD-MM-YYYY format</label>
            </div>

                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control visitor-family-days" value="90">
                    <label></label>
                </div>
            </div>
            
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control">
                    	<option value="100000">100,000 (min. requirement)</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="300000">300,000</option>
                        <option value="500000">500,000</option>
                        <option value="1000000">1,000,000</option>
                    </select>  
                </div> 
            </div>
            
               
            <p>Would you like to cover pre-existing medical conditions?</p>
            
            <div class="row">
            <div class="col-lg-12">
            <div class="m1">
            <div class="number">1</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit1" name="customRadioInline1" class="custom-control-input" checked>
              <label class="custom-control-label" for="visitor-couple-exit1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="visitor-couple-exit2" name="customRadioInline1" class="custom-control-input" >
              <label class="custom-control-label" for="visitor-couple-exit2">Yes</label>
            </div>
            </div>
            </div>
            </div>
            <input type="submit" value="GET QUOTE" class="quote">
              
            </form>
          </div>
        

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Form section Ends here -->
@endsection
