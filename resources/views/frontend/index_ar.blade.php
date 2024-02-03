<!doctype html>
<html lang="ar" dir="rtl">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}" />
  

<!--google-font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

<!--owl-carousel-->
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<!--favicon-->
<link rel="shortcut icon" href="{{asset('assets/imgs/logo.png')}} " type="image/x-icon">
    
  <!--style-->
  <!-- <link rel="stylesheet" href=" {{ asset('login/css/style.css') }}   "> -->

<!--style-->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<style>
      .navbar-brand img {
        width: 80px;
      }
      .navbar-nav {
        align-items: center;
      }
      .navbar .navbar-nav .nav-link {
        color: #fff;
        font-size: 1.1em;
        padding: 0.5em 1em;
      }

      .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}


      @media screen and (min-width: 768px) {
        .navbar-brand img {
          width: 100px;
        }
        .navbar-brand {
          margin-right: 0;
          padding: 0 1em;
        }
      }

      /* .carousel {
        width:100%;
        height:500px;
        margin:0 auto;
      }

      .carousel-inner {
          position: relative;
          width: 100%;
          height:400px;
          overflow: hidden; */
      }
      @media only all and (max-width: 500px) {
       
        .carousel {
        width:100%;
        height:150px;
        margin:0 auto;
      }
      .carousel-inner {
          position: relative;
          width: 100%;
          height:150px;
          overflow: hidden;
      }
      }

      body { padding-top: 70px; }
      
  </style>


      <title>{{$settings->site_name??""}}</title>    

  </head>


@isset($user)
  <body>
    <div class="text-center mb-2 " style =" background: #ffffff!important; color: rgb(255, 255, 255)     ">
        <br>
        
          <a class="" href="#">
            <img src="@if($settings){{$settings->logo}}@else url('storage/logo/01HGEJE1EBTJE1GE7BZHQAAGXX.png') @endif" alt="" width="120px" height="120px">
          </a>
    
      <br>
        <h3 style="color:black">
 
            {{$settings->site_name??""}}
    
        </h3>
        <br>
      </div>
 
      <div class="">
    
        <nav class="navbar  fixed-top navbar-light bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand" href="   {{$settings->site_url??""}}">موقعنا الالكتروني </a>
              <a class="navbar-brand" href="https://musaned.com.sa/home">  مساند</a>

            </div>
          </nav>
    </div>
  </body>

    <div class="mt-1 mb-1">
        @include('frontend.slider')
    </div>

    <div class="mt-1 mb-1">
        @include('frontend.searchBar')
    </div>


    <input value="{{$settings->is_otp_enable}}" id="is_otp_enable" hidden>
  

    <div class="mt-1 mb-1">
      <section class="available-courses">
            <div class="container">
                <div class="row">
                    @foreach($cvs as $cv)
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-1 shadow">
                            <div class="image-cover sameHeight">
                                <div class="card-badge-1"  style="background-color: #0b5ed7;">{{$cv->age}}<span>سنه</span></div>
                                <img src="{{asset("storage/$cv->cv_pic")}}">
                            </div>
                            <div class="card-body">
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price" >الاسم :</p><span>{{$cv->name}}</span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price" >الدوله :</p><span>{{$cv->country->country}}</span>
                                    </div>
                                </div>
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price">الديانه :</p><span>{{$cv->religion->name}}</span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price"> المهنه :</p><span>{{$cv->job->name}}</span>
                                    </div>
                                </div>
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price">رقم السيره الذاتيه :</p><span>{{$cv->id}}</span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price"> الحاله :</p><span>@if($cv->final_status=="Reserved") محجوز مؤقتا @elseif($cv->final_status=="Available") متاح @elseif($cv->final_status=="Back") متاح  @elseif($cv->final_status=="") متاح  @else غير متاح @endif</span>
                                    </div>
                                </div>
                                
                                <div class="text-center pt-2">
                                      <a class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$cv->id}}" style="width:100%;margin-top:3px;font-weight: bold;">مزيد من المعلومات</a><br>
                                      <a href="{{$cv->cv_file}}" class="btn btn-primary p-2" style="width:100%;margin-top:3px;font-weight: bold;" >عرض السيره الذاتيه</a><br>
                                      <a class="btn btn-primary p-2" href="#{{$user->id}}" data-bs-toggle="modal"  data-cv_id="{{$cv->id}}" data-office_id="{{$user->id}}" class="btn  p-2" style="margin:3px;width:100%;margin-top:3px;font-weight: bold;">طلب التواصل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{$cv->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#0d6efd;color:#fff;">
                                    <h4 class="modal-title" id="project-1-label">مزيد من المعلومات</h4>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <table class="table table-striped">
                                                        
                                                        <tbody>
                                                        
                                                            <tr>
                                                            <th scope="col">الاسم</th>
                                                            <td>{{$cv->name}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">رقم السيره الذاتيه</th>
                                                            <td>{{$cv->id}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الكود</th>
                                                            <td>{{$cv->code??""}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الراتب</th>
                                                            <td>{{$cv->salary}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">العمر</th>
                                                            <td>{{$cv->age}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الدوله</th>
                                                            <td>{{$cv->country->country}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">المهنه</th>
                                                            <td>{{$cv->job->name}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الديانه</th>
                                                            <td>{{$cv->religion->name}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الخبره</th>
                                                            <td>{{$cv->experience->experience}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">مكان الخبره</th>
                                                            <td>{{$cv->experienceLocation}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">نوع الاستقدام</th>
                                                            <td>{{$cv->Type_of_estgdam->name}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">مستوي التعليم</th>
                                                            <td>{{$cv->education->name??""}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">رسوم النقل</th>
                                                            <td>{{$cv->transportFees}}</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الحاله</th>
                                                            <td>@if($cv->final_status=="Reserved") محجوز مؤقتا @elseif($cv->final_status=="Available") متاح @elseif($cv->final_status=="Back") متاح  @elseif($cv->final_status=="") متاح  @else غير متاح @endif</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <img class="img-fluid" src="{{asset("storage/$cv->cv_pic")}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="modal-footer text-right">
                                        <button type="button" class="btn btn-sm btn-default" data-bs-dismiss="modal">اغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- Modal -->
                    <div class="modal fade otp" id="{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> </h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form dir="rtl"  method="post" action="{{route('make_cv')}}">
                                  @csrf
                                    <div class="form-group"    hidden  >
                                        <input name="cv_id" id="cv_id"  type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    <div class="form-group"    hidden  >
                                        <input name="office_id" id="office_id" type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    
                                    <div class="form-group" dir="rtl" style="padding: 3px;">
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" الاسم" required>
                                    </div>
                                    <div class="form-group" style="padding: 3px;">
                                        <input name="phone" id="model_phone_id" type="number" class="form-control" @if($settings->is_otp_enable == "1") readonly="readonly" @endif  placeholder="رقم جوالك" dir="rtl">
                                    </div>
                                    
                                    <div class="form-group" style="padding: 3px;">
                                        <select name="branch_id" class="form-control" >
                                            <option value="0">اختر الفرع (اختياري)</option>
                                    @foreach ($branches as $branch)

                                        <option value="{{$branch->id}}">{{$branch->name}}</option>

                                    @endforeach
                                </select>
                                </div>

                                
                                @if($settings->recieve_orders_by_country =="0")
                                    <div class="form-group" style="padding: 3px;">
                                        <select name="user_id" class="form-control" >
                                          <option value="0">اختر الموضف (اختياري)</option>
                                          @foreach ($emps as $emp)
                                          <option value="{{$emp->id}}">{{$emp->name}}</option>
                                          @endforeach
                                      </select>
                                </div>
                            @else
                                 <input hidden name="user_id" value="0">
                                @endif
                            <div class="form-group" style="padding: 3px;">
                                <select name="have_visa" class="form-control" >
                                    <option value="0">ليس لدي تاشيرة</option>
                                    <option value="1">لدي تأشيرة</option>
                                </select>
                                </div>
                                <br>
                                <br>
                                     <div class="text-center form-group" style="padding: 3px;">
                                         <button type="submit" class="btn btn-primary" style="padding: 5px;">طلب عبر وتساب</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                
                @endforeach
            </div>
        </div>
      </section>
    </div>

    

@else

@if(Session::has('message'))
<p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
@endisset


<a href="https://api.whatsapp.com/send?phone={{$settings->phone}}&text= معلومات%20اكثر%20تكرما." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>








<!--footer-start-->
<footer>
      <div class="rights">
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center"
            >
              <div class="made-with text-center">
                <p>
                  قام بتصميمه <i class="fas fa-heart"></i> 
                  <a href="https://wmc-ksa.com/home/index.php" target="_blank">النافذه للتسويق</a>
                </p>
                <p> استقدم- جميع الحقوق محفوظه</p>
              </div>
            </div>
            <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
          </div>
        </div>
      </div>
</footer>
<!--footer-end-->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/fa-pro.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>
     
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript">

     var otp_status = $('#is_otp_enable').val();
    
      //  alert("wwe");
        //return true; // prevents browser error messages  
        //  localStorage.setItem("verified", "0");
if(otp_status =="1"){

        $('.otp').on('show.bs.modal', function (event) {
                if(localStorage.getItem("verified")=="1"){
                  //$('#exampleModal').modal('toggle');
                }
                  else{
                    
                      var office_id = $(event.relatedTarget).data('office_id');
                    //   alert(office_id);
                      window.location.href = '/otp/'+office_id;
                      modal.hide();
                    //   $('.otp').modal('toggle');
                  }
           
            
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('cv_id') // Extract info from data-* attributes
                var office_id = button.data('office_id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                
              //alert(recipient)
                
                var modal = $(this)
                //modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body #cv_id').val(recipient)
                modal.find('.modal-body #office_id').val(office_id)
                modal.find('.modal-body #model_phone_id').val(localStorage.getItem("phone"))

                document.getElementById('model_phone_id').setAttribute('value',localStorage.getItem("phone"));
                // $("#model_phone_id").prop('disabled', true);

        })
      }else{

        $('.otp').on('show.bs.modal', function (event) {

          var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('cv_id') // Extract info from data-* attributes
                var office_id = button.data('office_id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                
              //alert(recipient)
                
                var modal = $(this)
                //modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body #cv_id').val(recipient)
                modal.find('.modal-body #office_id').val(office_id)

        });

      }
  </script>


</body>
</html>

