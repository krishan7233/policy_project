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
          <div class="form-check">
        <input type="radio" class="form-check-input super-visa" id="super-visa1" name="super_visa" value="option1" checked>
        <label class="form-check-label" for="super-visa1">SINGLE COVERAGE</label>

        <input type="radio" class="form-check-input super-visa ml-2" id="super-visa2" name="super_visa" value="option2" >
        <label class="form-check-label ml-4" for="super-visa2">COUPLE POLICY</label>

    </div>
          <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
            <label class="form-check-label" for="exampleRadios1"> SINGLE COVERAGE </label>
            </a> <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2"> COUPLE POLICY </label>
            </a> 
          </div> -->
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade super_visa_form1 show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="form-1" action="{{url('find-quotation')}}" method="post">
              @csrf
            <div class="form-field-row">
            @php
                $currentDate = \Carbon\Carbon::now()->subYears(40);
            @endphp
            <div class="field-dob">
                <span>Date of Birth</span>
                <input type="date" id="singledob" class="form-control singledob" name="date_of_birth" placeholder="Date of Birth" data-date="" data-date-format="DD MMMM YYYY" max="{{$currentDate->format('Y-m-d')}}">
                <label>DD-MM-YYYY format</label>
            </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                  <span>Age</span>
                  <input type="number" class="form-control ageInput" id="ageInput" name="age" placeholder="60" value="60" oninput="singleCoverageValidateAge()">
                  <label>years</label>

              </div>
            </div>
            <div id="errorDiv" style="color: red;"></div>
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" id="startDate" class="form-control startDate" name="start_date" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" class="startFormattedDateLabel">DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" id="endDate" class="form-control endDate" name="end_date" placeholder="End Date" value="{{ $futureDate }}" readonly>
                <label id="">DD-MM-YYYY format</label>
            </div>
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control" placeholder="365" value="365" name="no_of_days" readonly>
                    <label></label>
                </div>
            </div>
            
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control" name="coverage_amt">
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
          <div class="tab-pane fade show super_visa_form2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          	<form class="form-1" action="{{url('super-visa-post')}}" method="post">
              @csrf
            <div class="form-field-row">
            <div class="number">1</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control super-visa-couple-date1" name="super_visa_couple_birth1" placeholder="Date of Birth" max="{{$currentDate->format('Y-m-d')}}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control super-visa-couple-age1" name="super_visa_couple_age1" value="60" >
                    <label>years</label>
                    
                </div>
            </div>
            <p id="errorcouplepolicy1" style="color: red;"></p>

            <div class="form-field-row">
            <div class="number2">2</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>

                	<input type="date" class="form-control super-visa-couple-date2" name="super_visa_couple_birth2" placeholder="Date of Birth" max="{{$currentDate->format('Y-m-d')}}">

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>

                	<input type="number" class="form-control super-visa-couple-age2" name="super_visa_couple_age2" value="55">
                    <label>years</label>

                </div>

            </div>        
            <p id="errorcouplepolicy2" style="color: red;"></p>            
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" id="startDate" class="form-control CoupleStartDate1" name="super_visa_couple_start_date1" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" >DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" id="endDate" class="form-control coupleEndDate1" name="super_visa_couple_end_date1" placeholder="End Date" value="{{ $futureDate }}" readonly>
                <label id="">DD-MM-YYYY format</label>
            </div>

                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control" value="365" name="super_visa_couple_days1" readonly>
                    <label></label>
                </div>
            </div>
            
            
           	<div class="seconddate">
            	<div class="form-field-row">
            	<div class="sdate">
                	 <span>Start Date</span>

                	<input type="date" class="form-control CoupleStartDate2" name="super_visa_couple_start_date2" placeholder="Date of Birth" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                	 <span>End Datessss</span>
                	<input type="date"  class="form-control coupleEndDate2" name="super_visa_couple_end_date2" placeholder="Date of Birth" value="{{ $futureDate }}" readonly>

                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>

                	<input type="number" class="form-control" value="365" name="super_visa_couple_days2" readonly>
                    <label>Days</label>
                </div>
            </div>
            </div>
            <a class="seconddate-toggle" href="javascript: void(0)">+ Enter different dates per applicant</a>
            					 
            
            
            <div class="form-field-row">
            	<div class="coverage">
                	 <span>Coverage</span>
                    <select class="form-control" name="super_visa_couple_coverage1">
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
                    <select class="form-control" name="super_visa_couple_coverage2">
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
              <input type="radio" id="super_visa_couple_exit1" name="super_visa_couple_exit1" value="0" class="custom-control-input" checked>
              <label class="custom-control-label" for="super_visa_couple_exit1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="super_visa_couple_exit2" name="super_visa_couple_exit1" value="1" class="custom-control-input">
              <label class="custom-control-label" for="super_visa_couple_exit2">Yes</label>
            </div>
            </div>
            </div>
            </div>
            
            
            
           <div class="row">
            <div class="col-lg-12">
             <div class="m1">
            <div class="number2">2</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="super_visa_couple_exit3" name="super_visa_couple_exit2" value="0" class="custom-control-input" checked>
              <label class="custom-control-label" for="super_visa_couple_exit3">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="super_visa_couple_exit4" name="super_visa_couple_exit2" value="1" class="custom-control-input">
              <label class="custom-control-label" for="super_visa_couple_exit4">Yes</label>
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
