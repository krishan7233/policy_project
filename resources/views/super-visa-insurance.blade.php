@extends('layout.commonlayout')
@section('content')
<!-- Form section start here -->
<div class="section-larger">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <nav class="policy-form">
          <h6>What type of policy do you want?</h6>
          <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
            <label class="form-check-label" for="exampleRadios1"> SINGLE COVERAGE </label>
            </a> <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2"> COUPLE POLICY </label>
<<<<<<< HEAD
            </a> </div>
=======
            </a> 
          </div>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="form-1">
            <div class="form-field-row">
<<<<<<< HEAD
            	<div class="field-dob">
                	 <span>Date of Birth</span>
                	<input type="date" id="singledob" class="form-control" placeholder="Date of Birth" data-date="" data-date-format="DD MMMM YYYY">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>
                	<input type="number" class="form-control" placeholder="60">
                    <label>years</label>
                </div>
            </div>
            
            <div class="form-field-row">
            	<div class="sdate">
                	 <span>Start Date</span>
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                	 <span>End Date</span>
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18" disabled>
                    <label>DD-MM-YYYY format</label>
                </div>
=======
            <div class="field-dob">
                <span>Date of Birth</span>
                <input type="date" id="singledob" class="form-control" placeholder="Date of Birth" data-date="" data-date-format="DD MMMM YYYY" max="1983-09-19">
                <label>DD-MM-YYYY format</label>
            </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                  <span>Age</span>
                  <input type="number" class="form-control" id="ageInput" placeholder="60" oninput="singleCoverageValidateAge()">
                  <label>years</label>

              </div>
            </div>
            <div id="errorDiv" style="color: red;"></div>
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" id="startDate" class="form-control startDate" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" class="startFormattedDateLabel">DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" id="endDate" class="form-control endDate" placeholder="End Date" value="{{ $futureDate }}" readonly>
                <label id="">DD-MM-YYYY format</label>
            </div>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control" placeholder="365" disabled>
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
            
            
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
              <label class="custom-control-label" for="customRadioInline1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Yes</label>
            </div>
            
            
            <input type="submit" value="GET QUOTE" class="quote">
              
            </form>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          	<form class="form-1">
            <div class="form-field-row">
            <div class="number">1</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>
<<<<<<< HEAD
                	<input type="date" class="form-control" placeholder="Date of Birth">
=======
                	<input type="date" class="form-control" placeholder="Date of Birth" max="1983-09-19">
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>
<<<<<<< HEAD
                	<input type="number" class="form-control" placeholder="60">
                    <label>years</label>
                </div>
            </div>
            
=======
                	<input type="number" class="form-control" id="couplepolicy1" placeholder="60" oninput="couplePolicyValidateAge1()">
                    <label>years</label>
                    
                </div>
            </div>
            <p id="errorcouplepolicy1" style="color: red;"></p>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
            <div class="form-field-row">
            <div class="number2">2</div>
            	<div class="field-dob">
                	 <span>Date of Birth</span>
<<<<<<< HEAD
                	<input type="date" class="form-control" placeholder="Date of Birth">
=======
                	<input type="date" class="form-control" placeholder="Date of Birth" max="1983-09-19">
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tage">
                	<span>Age</span>
<<<<<<< HEAD
                	<input type="number" class="form-control" placeholder="55">
                    <label>years</label>
                </div>
            </div>        
            
            <div class="form-field-row">
            	<div class="sdate">
                	 <span>Start Date</span>
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                	 <span>End Date</span>
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18" disabled>
                    <label>DD-MM-YYYY format</label>
                </div>
=======
                	<input type="number" class="form-control" id="couplepolicy2" placeholder="55" oninput="couplePolicyValidateAge2()">
                    <label>years</label>

                </div>

            </div>        
            <p id="errorcouplepolicy2" style="color: red;"></p>            
            <div class="form-field-row">
            <div class="sdate">
                <span>Start Date</span>
                <input type="date" id="startDate" class="form-control CoupleStartDate1" placeholder="Start Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                <label id="startFormattedDateLabel" >DD-MM-YYYY format</label>
            </div>

            <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                <span>End Date</span>
                <input type="date" id="endDate" class="form-control coupleEndDate1" placeholder="End Date" value="{{ $futureDate }}" readonly>
                <label id="">DD-MM-YYYY format</label>
            </div>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
                	<input type="number" class="form-control" placeholder="365" disabled>
                    <label></label>
                </div>
            </div>
            
            
           	<div class="seconddate">
            	<div class="form-field-row">
            	<div class="sdate">
                	 <span>Start Date</span>
<<<<<<< HEAD
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                	 <span>End Date</span>
                	<input type="date" class="form-control" placeholder="Date of Birth" value="2023-09-18" disabled>
=======
                	<input type="date" class="form-control CoupleStartDate2" placeholder="Date of Birth" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="edate">
                <?php
                    $futureDate = \Carbon\Carbon::now()->addDays(365)->format('Y-m-d');
                    $formattedFutureDate = \Carbon\Carbon::parse($futureDate)->format('d-m-Y');
                ?>
                	 <span>End Date</span>
                	<input type="date"  class="form-control coupleEndDate2" placeholder="Date of Birth" value="{{ $futureDate }}" disabled>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
                    <label>DD-MM-YYYY format</label>
                </div>
                <div class="field-or">or</div>
                <div class="field-tdays">
                	<span>Days</span>
<<<<<<< HEAD
                	<input type="number" class="form-control" placeholder="Days" disabled>
=======
                	<input type="number" class="form-control" placeholder="365" disabled>
>>>>>>> 2f557a750caa89ad73948fe1f094214e093a8aee
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
              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" checked>
              <label class="custom-control-label" for="customRadioInline2">Yes</label>
            </div>
            </div>
            </div>
            </div>
            
            
            
           <div class="row">
            <div class="col-lg-12">
             <div class="m1">
            <div class="number2">2</div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadioInline2" class="custom-control-input" checked>
              <label class="custom-control-label" for="customRadioInline1">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadioInline2" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Yes</label>
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
