<footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                  <h5>Company</h5>
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="{{ route('about-us') }}">About Us</a></li>
                     <li><a href="#">FAQs</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                  <h5>Travel Insurance </h5>
                  <ul>
                     <li><a href="#">Super Visa Insurance</a></li>
                     <li><a href="#">Visitor To Canada Insurance</a></li>
                     <li><a href="#">Canadian Travelling Out of Country / Province</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-6 footer-sec">
                  <h5> Investments </h5>
                  <ul>
                     <li><a href="#">RESP</a></li>
                     <li><a href="#">RRSP</a></li>
                     <li><a href="#">TFSA</a></li>
                  </ul>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 footer-sec">
                  <h5>Contact </h5>
                  <p class="adres">52680 Matheson Blvd E, Suite # 102, Mississauga, ON, L4W 0A5</p>
                  <p><strong>Phone :</strong><a href="tel:+19058777777"> 905-877-7777</a></p>
				   <p><strong>Email :</strong><a href="mailto:info@policymarket.ca"> info@policymarket.ca</a></p>
               </div>
            </div>
         </div>
         <div class="container-fluid copyright">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-9 col-md-6">
                 <p>Copyright © 2023. All rights reserved by PolicyMarket. | <a href="{{ route('privacy-policy') }}">Privacy Policy</a> | <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a></p>
                  </div>
                  
                  <div class="col-xl-3 col-lg-3 col-md-6">
                     <div class="copyright-social">
                        <ul>
                           <li><a href="#"><img src="assets/images/icon_fb.png" class="img-fluid" alt=""></a></li>
                           <li><a href="#"><img src="assets/images/icon_tw.png" class="img-fluid" alt=""></a></li>
                           <li><a href="#"><img src="assets/images/icon_li.png" class="img-fluid" alt=""></a></li>
                           <li><a href="#"><img src="assets/images/icon_yt.png" class="img-fluid" alt=""></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>



<div id="cookies-popup" class="cookies-popup">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10">
						<div class="popup-content">
							<p>We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL the cookies.</p>
						</div>
				  </div>
					<div class="col-lg-2 text-right">
					<a href="#" data-toggle="modal" data-target="#cookieModalCenter">Cookie Settings</a>
						<button id="accept-cookies">Accept</button>
						
						
					</div>
				</div>
			</div>
    </div>


<!-- Bootstrap JavaScript -->

<!-- Popper JS -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<!-- Jequery -->
<script src="{{ asset('assets/js/aos/jquery-3.4.1.html') }}"></script>
<!-- owl-carousel java script -->
<script src="{{ asset('assets/js/owl-carousel/owl.carousel.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('assets/js/swiper/swiper.min.js') }}"></script>
<!-- Plugins JavaScripts -->
<script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





<script>
	$('.seconddate-toggle').click(function() {
  $('.seconddate').slideToggle();
  if ($('.seconddate-toggle').text() == "+ Enter different dates per applicant")
  
   {
    $(this).text("− Make dates same for all applicants")
  } else {
    $(this).text("+ Enter different dates per applicant")
  }
});

function singleCoverageValidateAge() {
    var ageInput = document.getElementById('ageInput');
    var errorDiv = document.getElementById('errorDiv');
    var inputValue = parseInt(ageInput.value);

    if (isNaN(inputValue) || inputValue < 40) {
        errorDiv.textContent = 'age1 must be greater than 39';
    } else {
        errorDiv.textContent = '';
    }
}
function couplePolicyValidateAge1() {
    var ageInput = document.getElementById('couplepolicy1');
    var errorDiv = document.getElementById('errorcouplepolicy1');
    var inputValue = parseInt(ageInput.value);

    if (isNaN(inputValue) || inputValue < 40) {
        errorDiv.textContent = 'age1 must be greater than 39';
    } else {
        errorDiv.textContent = '';
    }
}
function couplePolicyValidateAge2() {
    var ageInput = document.getElementById('couplepolicy2');
    var errorDiv = document.getElementById('errorcouplepolicy2');
    var inputValue = parseInt(ageInput.value);

    if (isNaN(inputValue) || inputValue < 40) {
        errorDiv.textContent = 'age1 must be greater than 39';
    } else {
        errorDiv.textContent = '';
    }
}


</script>


<script>
	$('.otheramt-toggle').click(function() {
   
  $('.otheramt').slideToggle();
  if ($('.otheramt-toggle').text() == "+ Enter different coverage amount per applicant")
   {
    $('.amt_type').val(1);
    $(this).text("− Make coverage amount same for all applicants")
  } else {
    $('.amt_type').val(0);
    $(this).text("+ Enter different coverage amount per applicant")
  }
});

// single coverage
function singleCoverageUpdateEndDate() {
    var startDateInput = $('.startDate').val();  // Use .val() to get the value
    var endDateInput = $('.endDate').val();
    var endFormattedDateLabel = $('.endFormattedDateLabel').text();  // Use .text() to get the text content
    var startDateValue = startDateInput;
    var endDate = new Date(startDateValue);
    endDate.setDate(endDate.getDate() + 365);  // Add 365 days
    var endYear = endDate.getFullYear();
    var endMonth = endDate.getMonth() + 1;
    var endDay = endDate.getDate();

    if (endMonth < 10) {
        endMonth = '0' + endMonth;
    }

    if (endDay < 10) {
        endDay = '0' + endDay;
    }

    var formattedEndDate = `${endYear}-${endMonth}-${endDay}`;
    $('.endDate').val(formattedEndDate);  // Use .val() to set the value

    var formattedEndLabel = `${endDay}-${endMonth}-${endYear}`;
    $('.endFormattedDateLabel').text(`DD-MM-YYYY format: ${formattedEndLabel}`);  // Use .text() to set the text content
}
$('.startDate').change(singleCoverageUpdateEndDate);
singleCoverageUpdateEndDate();

// couple policy

function couplePolicyUpdateEndDate1() {
    var startDateInput = $('.CoupleStartDate1').val();  // Use .val() to get the value
    // alert(startDateInput);
    var endDateInput = $('.coupleEndDate1').val();
    var endFormattedDateLabel = $('.endFormattedDateLabel1').text();  // Use .text() to get the text content

    var startDateValue = startDateInput;
    var endDate = new Date(startDateValue);
    endDate.setDate(endDate.getDate() + 365);  // Add 365 days

    var endYear = endDate.getFullYear();
    var endMonth = endDate.getMonth() + 1;
    var endDay = endDate.getDate();

    if (endMonth < 10) {
        endMonth = '0' + endMonth;
    }

    if (endDay < 10) {
        endDay = '0' + endDay;
    }

    var formattedEndDate = `${endYear}-${endMonth}-${endDay}`;
    $('.coupleEndDate1').val(formattedEndDate);  // Use .val() to set the value

    var formattedEndLabel = `${endDay}-${endMonth}-${endYear}`;
    $('.endFormattedDateLabel1').text(`DD-MM-YYYY format: ${formattedEndLabel}`);  // Use .text() to set the text content
}
$('.CoupleStartDate1').change(couplePolicyUpdateEndDate1);
couplePolicyUpdateEndDate1();
function couplePolicyUpdateEndDate2() {
    var startDateInput = $('.CoupleStartDate2').val();  // Use .val() to get the value
    // alert(startDateInput);
    var endDateInput = $('.coupleEndDate2').val();
    var endFormattedDateLabel = $('.endFormattedDateLabel2').text();  // Use .text() to get the text content

    var startDateValue = startDateInput;
    var endDate = new Date(startDateValue);
    endDate.setDate(endDate.getDate() + 365);  // Add 365 days

    var endYear = endDate.getFullYear();
    var endMonth = endDate.getMonth() + 1;
    var endDay = endDate.getDate();

    if (endMonth < 10) {
        endMonth = '0' + endMonth;
    }

    if (endDay < 10) {
        endDay = '0' + endDay;
    }

    var formattedEndDate = `${endYear}-${endMonth}-${endDay}`;
    $('.coupleEndDate2').val(formattedEndDate);  // Use .val() to set the value

    var formattedEndLabel = `${endDay}-${endMonth}-${endYear}`;
    $('.endFormattedDateLabel2').text(`DD-MM-YYYY format: ${formattedEndLabel}`);  // Use .text() to set the text content
}
$('.CoupleStartDate2').change(couplePolicyUpdateEndDate2);
couplePolicyUpdateEndDate2();
$("#singledob").datepicker({ dateFormat:'dd/mm/yy'});

</script>

<script>
  $(document).ready(function() {
    $('.deductible_amt,.coverage_amt,input[name=customRadioOptions]').on('change', function() {
        var deductible = $('.deductible_amt').val();
        var coverage = $('.coverage_amt').val();
        var check_exit = $('input[name=customRadioOptions]:checked').val();

        // Get the CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // AJAX request with CSRF token
        $.ajax({
          type: 'POST',
          url: 'deductible_filter',  // Replace with your controller URL
          data: {
            deductible: deductible,
            coverage: coverage,
            check_exit: check_exit
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            window.location.href = 'single-detect-quotation';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
          }
        });
      });
      $('.singledob').change(function() {
        var selectedDate = $(this).val();

        // Parse the selected date to a JavaScript Date object
        var dob = new Date(selectedDate);

        // Get the current year
        var currentYear = new Date().getFullYear();

        // Calculate the difference in years
        var ageDifference = currentYear - dob.getFullYear();
        $('.ageInput').val(ageDifference);
        // alert(ageDifference);

      });
      // visitor couple policy
      $('.visitor-single-pilicy-start-date, .visitor-single-pilicy-end-date').change(function() {
            var startDate = new Date($('.visitor-single-pilicy-start-date').val());
            var endDate = new Date($('.visitor-single-pilicy-end-date').val());

            if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime())) {
                var differenceInMilliseconds = endDate - startDate;
                var differenceInDays = differenceInMilliseconds / (1000 * 3600 * 24);
                $('.visitor-couple-single-day').val(differenceInDays);
            } 
        });
      $('.visitor-couple-start-date1, .visitor-couple-end-date1').change(function() {
            var startDate = new Date($('.visitor-couple-start-date1').val());
            var endDate = new Date($('.visitor-couple-end-date1').val());

            if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime())) {
                var differenceInMilliseconds = endDate - startDate;
                var differenceInDays = differenceInMilliseconds / (1000 * 3600 * 24);
                $('.visitor-couple-days1').val(differenceInDays);
            } 
        });
      $('.visitor-couple-start-date2, .visitor-couple-end-date2').change(function() {
            var startDate = new Date($('.visitor-couple-start-date2').val());
            var endDate = new Date($('.visitor-couple-end-date2').val());

            if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime())) {
                var differenceInMilliseconds = endDate - startDate;
                var differenceInDays = differenceInMilliseconds / (1000 * 3600 * 24);
                $('.visitor-couple-days2').val(differenceInDays);
            } 
        });


        $('.visitor-couple-policy-date1').change(function() {
          var providedDate = new Date($('.visitor-couple-policy-date1').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.visitor-couple-policy-year1').val(differenceInYears);
          }
        });
        $('.visitor-couple-policy-date2').change(function() {
          var providedDate = new Date($('.visitor-couple-policy-date2').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.visitor-couple-policy-year2').val(differenceInYears);
          }
        });
        $('.super-visa-couple-date1').change(function() {
          var providedDate = new Date($('.super-visa-couple-date1').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.super-visa-couple-age1').val(differenceInYears);
          }
        });
        $('.super-visa-couple-date2').change(function() {
          var providedDate = new Date($('.super-visa-couple-date2').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.super-visa-couple-age2').val(differenceInYears);
          }
        });
        // super visa couple
        $('.super-couple-deductible-amt,.super-couple-coverage-amt1,.super-couple-coverage-amt2,input[name=super_couple_exit1],input[name=super_couple_exit2]').on('change', function() {
          // alert('hello');
        var deductible = $('.super-couple-deductible-amt').val();
        var coverage1 = $('.super-couple-coverage-amt1').val();
        var coverage2 = $('.super-couple-coverage-amt2').val();
        var check_exit1 = $('input[name=super_couple_exit1]:checked').val();
        var check_exit2 = $('input[name=super_couple_exit2]:checked').val();

        // // Get the CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // AJAX request with CSRF token
        $.ajax({
          type: 'POST',
          url: 'super-visa-deductible-couple',  // Replace with your controller URL
          data: {
            deductible: deductible,
            coverage1: coverage1,
            coverage2: coverage2,
            check_exit1: check_exit1,
            check_exit2: check_exit2,
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            window.location.href = 'super-visa-deductable-quotation';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
          }
        });
      });
      // visitor 
      $('.visitor-family-policy-date1').change(function() {
          var providedDate = new Date($('.visitor-family-policy-date1').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.visitor-family-policy-year1').val(differenceInYears);
          }
        });
        $('.visitor-family-policy-date2').change(function() {
          var providedDate = new Date($('.visitor-family-policy-date2').val());
          if (!isNaN(providedDate.getTime())) {
              // Calculate the difference in years
              var currentDate = new Date();
              var differenceInYears = currentDate.getFullYear() - providedDate.getFullYear();
              $('.visitor-family-policy-year2').val(differenceInYears);
          }
        });
        $('.visitor-family-start-date, .visitor-family-end-date').change(function() {
            var startDate = new Date($('.visitor-family-start-date').val());
            var endDate = new Date($('.visitor-family-end-date').val());

            if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime())) {
                var differenceInMilliseconds = endDate - startDate;
                var differenceInDays = differenceInMilliseconds / (1000 * 3600 * 24);
                $('.visitor-family-days').val(differenceInDays);
            } 
        });
        $('.visitor-single-deductible-amt,.visitor-single-coverage-amt,input[name=visitor_single_exit]').on('change', function() {
        var deductible = $('.visitor-single-deductible-amt').val();
        var coverage = $('.visitor-single-coverage-amt').val();
        var check_exit = $('input[name=visitor_single_exit]:checked').val();

        // Get the CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // AJAX request with CSRF token
        $.ajax({
          type: 'POST',
          url: 'visitor-single-coverage-deductatble-get-quotation',  // Replace with your controller URL
          data: {
            deductible: deductible,
            coverage: coverage,
            check_exit: check_exit
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            console.log(response);
            window.location.href = 'visitor-single-deductable-quotation';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
          }
        });
      });
      $('.visitor-couple-deductible-amt,.visitor-couple-coverage-amt1,.visitor-couple-coverage-amt2,input[name=visitor_couple_exit1],input[name=visitor_couple_exit2]').on('change', function() {
          // alert('hello');
        var deductible = $('.visitor-couple-deductible-amt').val();
        var coverage1 = $('.visitor-couple-coverage-amt1').val();
        var coverage2 = $('.visitor-couple-coverage-amt2').val();
        var check_exit1 = $('input[name=visitor_couple_exit1]:checked').val();
        var check_exit2 = $('input[name=visitor_couple_exit2]:checked').val();

        // // Get the CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // AJAX request with CSRF token
        $.ajax({
          type: 'POST',
          url: 'visitor-visa-deductible-couple',  // Replace with your controller URL
          data: {
            deductible: deductible,
            coverage1: coverage1,
            coverage2: coverage2,
            check_exit1: check_exit1,
            check_exit2: check_exit2,
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            // console.log(response);
            window.location.href = 'visitor-visa-deductable-quotation';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
          }
        });
      });
// visitor family 
    $('.visitor_deductible_amt,.visitor_coverage_amt,input[name=visitor_family_exit_deductible]').on('change', function() {
      // alert("gg")
        var deductible = $('.visitor_deductible_amt').val();
        var coverage = $('.visitor_coverage_amt').val();
        var check_exit = $('input[name=visitor_family_exit_deductible]:checked').val();

        // Get the CSRF token
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // AJAX request with CSRF token
        $.ajax({
          type: 'POST',
          url: 'visitor-family-deductible',  // Replace with your controller URL
          data: {
            deductible: deductible,
            coverage: coverage,
            check_exit: check_exit
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            // console.log(response);
            window.location.href = 'visitor-family-deductable-quotation';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX request failed:', textStatus, errorThrown);
          }
        });
      });
    });
</script>

<!--Our Partners start-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>

	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

<!--Our Partners End-->

<script>
	$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('.navbar').addClass('fixed-header');
    }
    else {
        $('.navbar').removeClass('fixed-header');
    }
});
</script>

<!--Read More Start-->

<script>
	$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read More");
      $("#text").slideUp();
    }
  });
});
</script>

<!--Read More End-->


<!--Text Email Start-->
<script>
$(document).ready(function () {
    $("#EmailBtn").click(function () {
        $("#HiddnData").show();
		$("#EmailBtn").hide();
    });	
	$("#DismissBtn").click(function () {
        $("#HiddnData").hide();
		$("#EmailBtn").show();
    });

});
</script>
<!--Text Email Start End-->

<script>
	$(document).ready(function() {
  $("#myInput").on('input', function() {
    // Check if the input value is a digit
    if (/^\d+$/.test($(this).val())) {
      $("#WhtsBtn").show();
    } else {
      $("#WhtsBtn").hide();
    }
  });
});
</script>


<!--Cookies Js Start-->


<script>
    $(document).ready(function () {
        if (localStorage.getItem('cookies-accepted') !== 'true') {
            $('#cookies-popup').show();
        }

        $('#accept-cookies').click(function () {
            localStorage.setItem('cookies-accepted', 'true');
            $('#cookies-popup').hide();
        });
    });
</script>

<!--Cookies Js End-->


<!--Form Field Hidden Data Start-->

<script>
$(document).ready(function () {
    $("#Address").click(function () {
        $("#AddressDetail").toggle();
		
		
		var icon = $(this).find('i');

        if (icon.hasClass('fa-question-circle-o')) {
		
            icon.removeClass('fa-question-circle-o').addClass('fa-close');
        } else {
            
            icon.removeClass('fa-close').addClass('fa-question-circle-o');
        }
		
		
    });	
	
	$("#ArrDate").click(function () {
        $("#ArrDateDetail").toggle();
		
		var icon = $(this).find('i');

        if (icon.hasClass('fa-question-circle-o')) {
            
            icon.removeClass('fa-question-circle-o').addClass('fa-close');
        } else {
            
            icon.removeClass('fa-close').addClass('fa-question-circle-o');
        }
		
    });
	
	$("#CntryName").click(function () {
        $("#CountryDetail").toggle();
		
		var icon = $(this).find('i');

        if (icon.hasClass('fa-question-circle-o')) {
            
            icon.removeClass('fa-question-circle-o').addClass('fa-close');
        } else {
            
            icon.removeClass('fa-close').addClass('fa-question-circle-o');
        }
		
    });
	
	$("#BenName").click(function () {
        $("#BenNameDetail").toggle();
		
		var icon = $(this).find('i');

        if (icon.hasClass('fa-question-circle-o')) {
           
            icon.removeClass('fa-question-circle-o').addClass('fa-close');
        } else {
            
            icon.removeClass('fa-close').addClass('fa-question-circle-o');
        }
		
    });
	
	
	
});
</script>

<!--Form Field Hidden Data End-->


<!--Accordian Start-->

<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<!--Accordian End-->



<!--Cookie Popup Start-->

<div class="modal fade" id="cookieModalCenter" tabindex="-1" role="dialog" aria-labelledby="cookieModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookieModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       dd
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="accept-cookies">Save & Accept</button>
      </div>
    </div>
  </div>
</div>



<!--Cookie Popup End-->

</body>
</html>