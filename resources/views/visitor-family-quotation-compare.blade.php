@extends('layout.commonlayout')

@section('content')
<style>
  .border_div1{
            border-width: 1px 1px 1px 1px;
            border-style: solid;
            border-color: #000;
            padding: 40px;
  }
  .border_div2{
            border-width: 0px 1px 1px 1px;
            border-style: solid;
            border-color: #000;
            padding: 24px;
  }
  .border_div3{
            border-width: 0px 1px 1px 1px;
            border-style: solid;
            border-color: #000;
            padding: 22px;
  }
  .border_div4{
            border-width: 0px 1px 1px 1px;
            border-style: solid;
            border-color: #000;
  }
  .border_div5{
            border-width: 1px 1px 1px 0px;
            border-style: solid;
            border-color: #000;
  }
  .border_div6{
            border-width: 0px 1px 1px 0px;
            border-style: solid;
            border-color: #000;
  }
  .border_div7{
            border-width: 0px 1px 1px 0px;
            border-style: solid;
            border-color: #000;
  }
  .text_position{
    text-align:center;
    padding:5px;
  }
</style>
<div class="compare-table">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
			<div class="backhome">
				<a href="#"><i class="fa fa-arrow-left"></i> BACK TO HOME</a>
			</div>
      <div class="row">
        <!-- @php

  echo"<pre>";
    print_r($array_check);
        print_r($compare_quote);
        echo"</pre>";
        @endphp -->
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-12 border_div1"  ></div>
                <div class="col-sm-12 border_div2" ></div>
                <div class="col-sm-12 border_div3"></div>
                <div class="col-sm-12 border_div4 text_position" >COVID 19 COVERAGE	</div>
                <div class="col-sm-12 border_div4 text_position" >AMBULANCE SERVICES / TRANSPORTATION	</div>
                <div class="col-sm-12 border_div4 text_position" >EMERGENCY HOSPITALIZATION	</div>
                <div class="col-sm-12 border_div4 text_position" >SERVICES OF A PHYSICIAN, SURGEON, ETC.	</div>
                <div class="col-sm-12 border_div4 text_position" >EMERGENCY MEDICAL CARE	</div>
                <div class="col-sm-12 border_div4 text_position" >WALK-IN CLINIC VISITS	</div>
                <div class="col-sm-12 border_div4 text_position" >FOLLOW UP TREATMENT	</div>
                <div class="col-sm-12 border_div4 text_position" >LABORATORY DIAGNOSTICS / X-RAY	</div>
                <div class="col-sm-12 border_div4 text_position" >PRESCRIPTION MEDICATIONS	</div>
                <div class="col-sm-12 border_div4 text_position" >DENTAL PAIN RELIEF	</div>
                <div class="col-sm-12 border_div4 text_position" >EMERGENCY DENTAL REPAIR	</div>
                <div class="col-sm-12 border_div4 text_position" >EMERGENCY HOME RETURN / EVACUATION	</div>
                <div class="col-sm-12 border_div4 text_position" >REPATRIATION OF REMAINS	</div>
                <div class="col-sm-12 border_div4 text_position" >CREMATION / BURIAL	</div>
                <div class="col-sm-12 border_div4 text_position" >STABLE PRE-EXISTING MEDICAL CONDITIONS COVERAGE	</div>
                <div class="col-sm-12 border_div4 text_position" >STABILITY PERIOD	</div>
                <div class="col-sm-12 border_div4 text_position" >PRIVATE DUTY NURSE / MEDICAL ATTENDANT	</div>
                <div class="col-sm-12 border_div4 text_position" >RENTAL / PURCHASE OF MEDICAL APPLIANCES	</div>
                <div class="col-sm-12 border_div4 text_position" >SIDE-TRIPS BENEFIT (WITH IN CANADA AND OUTSIDE OF CANADA)	</div>
                <div class="col-sm-12 border_div4 text_position" >WAIT PERIOD (IF GAP)	</div>
                <div class="col-sm-12 border_div4 text_position" >WAIT PERIOD (IF LANDED)	</div>
                <div class="col-sm-12 border_div4 text_position" >ENHANCED SERVICES	</div>
                <div class="col-sm-12 border_div4 text_position" >EMERGENCY SERVICES OF CHIROPRACTOR, CHIROPODIST, PHYSIOTHERAPIST, OSTEOPATH, OR PODIATRIST	</div>
                <div class="col-sm-12 border_div4 text_position" >ACUPUNCTURE	</div>
                <div class="col-sm-12 border_div4 text_position" >ACCIDENTAL DEATH	</div>
                <div class="col-sm-12 border_div4 text_position" >DOUBLE DISMEMBERNENT	</div>
                <div class="col-sm-12 border_div4 text_position" >SINGLE DISMEMBERNENT	</div>
                <div class="col-sm-12 border_div4 text_position" >BEDSIDE COMPANION ACCOMMODATION / TRANSPORTATION	</div>
                <div class="col-sm-12 border_div4 text_position" >MEALS AND ACCOMMODATION / HOSPITAL ALLOWANCE / OUT-OF-POCKET EXPENSES	</div>
                <div class="col-sm-12 border_div4 text_position" >MATERNITY BENEFITS / DELIVERY COVERAGE	</div>
                <div class="col-sm-12 border_div4 text_position" >PHYSICAL EXAMINATION (NON-EMERGENCY)	</div>
                <div class="col-sm-12 border_div4 text_position" >EYE EXAMINATION (NON-EMERGENCY)	</div>
                <div class="col-sm-12 border_div4 text_position" >VACCINES (NON-EMERGENCY)	</div>
                <div class="col-sm-12 border_div4 text_position" >CHILD CARE / ESCORT EXPENSES	</div>
                <div class="col-sm-12 border_div4 text_position" >PSYCHIATRIC / PSYCHOLOGICAL	</div>
                <div class="col-sm-12 border_div4 text_position" >RETURN OF A VEHICLE	</div>
                <div class="col-sm-12 border_div4 text_position" >SPORTS INJURIES COVERAGE	</div>
                <div class="col-sm-12 border_div4 text_position" >FLIGHT / TRAVEL ACCIDENT	</div>
                <div class="col-sm-12 border_div4 text_position" >TRIP-BREAK BENEFIT	</div>
                <div class="col-sm-12 border_div4 text_position" >COVERAGE DURING TRANSIT	</div>
                <div class="col-sm-12 border_div4 text_position" >CLAIM MNGT. COMP.	</div>
                <div class="col-sm-12 border_div4 text_position" >24-HOUR EMERGENCY ASSISTANCE CENTER	</div>
                <div class="col-sm-12 border_div4 text_position" >CLAIM PHONE#	</div>
                <div class="col-sm-12 border_div4 text_position" >ONLINE CLAIM PORTAL	</div>
                <div class="col-sm-12 border_div4 text_position" >POLICY WORDING	</div>
                <div class="col-sm-12 border_div4 text_position" >CLAIM FORM	</div>
                <div class="col-sm-12 border_div4 text_position" >UNDERWRITTEN BY	</div>
              </div>
            </div>
            @foreach($compare_quote as $compare)
            @php
            if($compare->plan_type==1){
              $photo = $compare->basic;
            }
            if($compare->plan_type==2){
              $photo = $compare->standard;
            }
            if($compare->plan_type==3){
              $photo = $compare->enhanced;
            }
            
            @endphp
            <div class="col-sm-3">
              <div class="row">
                <div class="col-sm-12 border_div5" >
                  <img src="{{$photo}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-12 border_div6">
                  <h4>{{'$'.number_format($compare->total_charge - $compare->detect_amt, 2)}}</h4>
                </div>
                <div class="col-sm-12 border_div6"  style="padding:9px;margin-top:1px">
                  <a href="{{url('visitor-family-order',$compare->id)}}" class="buy-now">BUY NOW</a>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Hospitalization Covered</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  Max <b>{{$compare->aggregate_price}}	</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  Up to Coverage Amount	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  Up to Coverage Amount		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  Up to Coverage Amount		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Covered</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Covered</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Covered</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  A 30 day Supply
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Not Covered</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Max <b>5,000</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Included		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Max <b>$10,000</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Max <b>$10,000</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Included, if Selected		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>365 Days</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Max <b>10,000</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Max <b>5,000</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position" style="padding:17.5px;">
                  <b>Only Within Canada</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>5 Days</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>5 Days</b>
                </div>
                <div class="col-sm-12 border_div7 text_position" >
                 --	
                </div>
                <div class="col-sm-12 border_div7 text_position" style="padding:29px;">
                Max $500/Category		
                </div>
                <div class="col-sm-12 border_div7 text_position" >
                <b>N/A</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>Not Covered</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>Not Covered</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>Not Covered</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position"style="padding:17px;">
                <b>N/A</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position" style="padding:17px;">
                <b>N/A</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                <b>N/A</b>			
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Not for Hazardous Sports		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Up to the Coverage Amount		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Only Layover</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                 <b>Only To Canada</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>CCMP</b>
                </div>
                <div class="col-sm-12 border_div7 text_position">
                Included		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>1-866-209-4203</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <b>Claims@ccmp.ca</b>	
                </div>
                <div class="col-sm-12 border_div7 text_position">
                 <a href="#">Policy Wording</a>		
                </div>
                <div class="col-sm-12 border_div7 text_position">
                  <a href="#">Claim Form</a>	
                </div>
               
                <div class="col-sm-12 border_div7 text_position">
                  <b>Industrial Alliance</b>
                </div>
 
              </div>
            </div>
            @endforeach

			</div>
		</div>
	</div>
</div>





<!-- Form section Ends here -->
@endsection 