@extends('layout.commonlayout')
@section('content')
<!-- Form section start here -->
<div class="section-larger">

<div class="container">
	<div class="row">
    	<div class="col-lg-12">
        	<div class="get-email">
            	<a href="#" id="EmailBtn">Email/Text these rates</a>
            </div>
			
			<div class="emailData" id="HiddnData">
				<a href="#" class="CloseBtn" id="DismissBtn"> <i class="fa fa-close"></i> </a>
			<h3>Get an Email/Text</h3>
				<form>
        <div class="row">
			<div class="col-lg-4">
				<div class="form-group">
				<input type="text" class="form-control"  placeholder="Your Name">
			  </div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
				<input type="email" class="form-control"  placeholder="Email">
			  </div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
				<input type="text" class="form-control" id="myInput" placeholder="Canadian Phone">
				<span>Canadian Phone number only.</span>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a href="#" class="SendBtn">EMAIL/TEXT</a>
				<a href="#" class="SendBtn" id="WhtsBtn" style="display: none">WHATSAPP</a>
			</div>
		</div>
		</form>
			</div>
			
        </div>
    </div>
</div>

@php


if($company[0]->plan_type==1){
    $photo = $company[0]->basic;
}
if($company[0]->plan_type==2){
    $photo = $company[0]->standard;
}
if($company[0]->plan_type==3){
    $photo = $company[0]->enhanced;
}
@endphp

<div class="plan-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left">
                <p><a href="#"><i class="fa fa-pencil"></i></a></p>
                    <img src="{{$photo}}" />
                    <div class="price-section">
              <h3><span>$</span>{{$company[0]->total_charge}}<span></span></h3>
              <h3><span><strong>{{$company[0]->per_month}}</strong>/month</span></h3>
              <a href="tel:6475709070" class="call-btn"><i class="fa fa-mobile"></i> (647) 570-9070</a>
            </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="right">
                <p>To begin your application process, please enter your contact details</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                	<form action="{{route('single-plan-post')}}" method="POST">
                        @csrf
                    	<div class="form-field-row">
                        	<input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        	<input type="hidden" name="buy_id" class="form-control" value="{{$buy_id}}" required>
                        </div>
                        
                        <div class="form-field-row">
                        	<input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                        </div>
                        
                        
                        <div class="form-field-row">
                        	<input type="email" name="email" class="form-control" placeholder="Email address" required>
                        </div>
                        
                         <div class="form-field-row">
                        	<input type="submit" class="form-control" value="Continue" >
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="plan-details-summery">
    <div class="container">
    <h3>Plan Details</h3>
    	<div class="row">
      <button class="accordion">Benefit Summary</button>
      <div class="panel">
        <div class="panel-inner">
        	<table class="table table-striped">
  <tbody>
  <tr>
      <td colspan="2">Basic Benefits</td>
    </tr>
    <tr>
      <td><strong>Covid-19</strong></td>
      <td><strong>Hospitalization Covered</strong></td>
    </tr>
    <tr>
      <td><strong>Ambulance</strong>	</td>
      <td>Max <strong>$5,000</strong></td>
    </tr>
   <tr>
      <td><strong>Hospitalization</strong><br />
      	<span>(Related to Emergency)</span>
      </td>
      <td>Up to Coverage Amount</td>
    </tr>
  </tbody>
</table>
        </div>
      </div>
      <button class="accordion">Eligibility Requirements</button>
      <div class="panel">
        <div class="panel-inner">
        	ddd
        </div>
      </div>
      
    </div>
    </div>
    </div>
    
</div>
  
</div>
<!-- Form section Ends here -->
@endsection