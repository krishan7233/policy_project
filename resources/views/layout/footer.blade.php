
<!-- Bootstrap JavaScript -->
<!-- jQuery library -->
<script src="{{ asset('assets/js/bootstrap/jquery.min.js') }}"></script>
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
// 	$('.otheramt-toggle').click(function() {
//   $('.otheramt').slideToggle();
//   if ($('.otheramt-toggle').text() == "+ Enter different coverage amount per applicant")
  
//    {
//     $(this).text("− Make coverage amount same for all applicants")
//   } else {
//     $(this).text("+ Enter different coverage amount per applicant")
//   }
// });

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
        $('.form-check-input').change(function() {
            var selectedValue = $("input[name='visitor_policy']:checked").val();
            if(selectedValue == 'visitor1'){
              $('.visitor-form2').hide();
              $('.visitor-form1').show();

            }
            if(selectedValue == 'visitor2'){
              $('.visitor-form1').hide();
              $('.visitor-form2').show();


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


</body>
</html>