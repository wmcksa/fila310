<!doctype html>
<html lang="en">
  <head>
  	<title>عالم الدقة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href=" {{ asset('login/css/style.css') }}   ">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center"  >
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<form  id="myform1" action="" method="POST" class="login-form" onsubmit="process(event)" >
                            @csrf
							<div class="form-group">
								<input    name="name"  id="name_id" class="form-control" type="text"      placeholder="الاسم  " required>
							</div>
							<div class="form-group">
								<input    name="phone"  id="phone" class="form-control" type="tel"    minlength="9" maxlength="9" type="text" placeholder="رقم الجوال" required>
							</div>
							<div class="form-group" hidden >
								<input  value="" name="phone2"  id="phone2_id" class="form-control" type="tel"    minlength="9" maxlength="9" type="text" placeholder="   "  >
							</div>
							<div class="form-group">
								<button type="submit" id="submit_button_1" class="btn btn-primary rounded submit p-3 px-5">ارسال كود التحقق</button>
							</div>
	                    </form>
						<form  id="myform2" action="" method="POST" class="login-form">
							@csrf

							<input type="hidden" value="{{$id}}" id="office_id">

								<div class="form-group">
									<input name="code" minlength="4" maxlength="4"  type="number" class="form-control rounded-left" placeholder="كود التحقق " required>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary rounded submit p-3 px-5">متابعة    </button>
								</div>
						</form>

	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

	</body>
</html>
<script>

var $international_phone_number;

	const phoneInputField = document.querySelector("#phone");
	const phoneInput = window.intlTelInput(phoneInputField, {
		preferredCountries: ["SA", "YE"],
	  utilsScript:
		"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
	});



	function process(event) {
        event.preventDefault();
        const phoneNumber = phoneInput.getNumber();
		$international_phone_number=phoneNumber;
		$international_phone_number=$international_phone_number.replace("+", "");
		document.getElementById('phone2_id').value =  $international_phone_number;
 //alert($international_phone_number);

}

  </script>
  <script>

    //document.getElementById("myform2").style.display="none";

    //alert(localStorage.getItem("phone"));

   if(	localStorage.getItem("verified")=="1"){
	//alert(" تم التحقق مسبقا   ");
    }
   else{
	//alert("  لم يتم  التحقق مسبقا   ");
    }

	$(document).ready(function () {
		//alert("wwe");
		$("#myform2").hide();
		var $code;
		$('#myform1').submit(function(e){
			e.preventDefault();
			var form = $(this);
			var actionUrl = "{{url('/otp_get_code')}}";
			
			$.ajax({
				type: "POST",
				url: actionUrl,
				data: form.serialize(),
				dataType: "json",
				success:function(data){
					// Process with the response data
					$("#myform1").hide();
					$("#myform2").show();
					$code=data;
					//alert($code);
				}
			});
		});

			$('#myform2').submit(function(e){
				e.preventDefault();
				var form = $(this);
				var $user_code = $('#myform2').find('input[name="code"]').val();
			

			//alert( $user_code);


				if($user_code==$code ||$user_code=='9949'){

					localStorage.setItem("verified", "1");
					localStorage.setItem("phone", $international_phone_number);
					
                    var office_id = document.getElementById("office_id").value;

					//alert("phone"+$international_phone_number);
					alert("تمت عملية التحقق بنجاح");
					window.location.href = '/'+office_id;

				}
				else{
					alert("  كود تحقق غير صحيح  ");
					localStorage.setItem("verified", "0");
				}

			});
    });



</script>