<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  	<title>عالم الدقة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/css/style.css">

	</head>
	<body>




@if(!is_null($settings))





@if($settings->website_login_form==1)


		 
		
@else

<script type="text/javascript">
	alert(55);
	window.location = "{{route('index_ar')}}";//here double curly bracket
</script>


@endif




@endif


		










	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center" dir="rtl">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	 
		      	<h3 class="text-center mb-4">ادخل بياناتك لعرض جميع السير الذاتية </h3>
						<form  action="{{url('/insert_login_user')}}" method="POST" class="login-form">

                            @csrf
                            
		      		<div class="form-group">
		      			<input name="name" type="text" class="form-control rounded-left" placeholder="الاسم" required>
		      		</div>


					  <div class="form-group">
		      			<input name="phone" type="text" class="form-control rounded-left" placeholder="رقم الجوال" required>
		      		</div>
	             

	             
	            <div class="form-group d-md-flex">
	            	
								 
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">دخول</button>
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

