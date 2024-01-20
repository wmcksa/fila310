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


    <title>{{$settings->site_name}}</title>    
    
</head>

  <body>
    <div class="text-center mb-2 " style =" background: #ffffff!important; color: rgb(255, 255, 255)     ">
        <br>
         
          <a class="" href="#">
            <img src="{{asset("storage/$settings->logo")}}" alt="" width="120px" height="120px">
          </a>
    
      <br>
        <h3 style="color:black">
 
            {{$settings->site_name}}
    
        </h3>
        <br>
      </div>
 
      <div class="">
    
        <nav class="navbar  fixed-top navbar-light bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand" href="   {{$settings->site_url}}">موقعنا الالكتروني </a>
              <a class="navbar-brand" href="https://musaned.com.sa/home">  مساند</a>
              <a class="navbar-brand" href="https://wa.me/{{$settings->phone}}">    وتساب</a>
              <a class="navbar-brand" href="tel:+{{$settings->phone}}">  اتصال  </a>
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


<div class="mt-1 mb-1">
<section class="available-courses">
        <div class="container">
            <div class="row">
                @foreach($cvs as $cv)
                <div class="col-md-4 col-sm-6">
                    <div class="card card-1 shadow">
                        <div class="image-cover sameHeight">
                            <div class="card-badge-1">{{$cv->age}}<span>سنه</span></div>
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
                            <div class="text-center pt-2">
                                   <a class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$cv->id}}">مزيد من المعلومات</a>
                                   <a href="#{{$user->id}}" data-bs-toggle="modal"  data-cv_id="{{$cv->id}}" data-office_id="{{$user->id}}" class="btn  p-2" style="background-color: #8d448b;color:#fff">طلب التواصل</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop{{$cv->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color:var(--main-color);color:#fff;">
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
                                                        <th scope="col">رقم السيره الذاتيه</th>
                                                        <td>{{$cv->id}}</td>
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
                                                        <th scope="col">نوع الاستقدام</th>
                                                        <td>{{$cv->name}}</td>
                                                        </tr>
                                                        <tr>
                                                        <th scope="col">الحاله</th>
                                                        <td>@if($cv->final_status=="reserved") قيد التفاوض مع عميل اخر @elseif($cv->final_status=="") متاح @else متاح  @endif</td>
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
                                    <button type="button" class="btn btn-sm btn-default" data-bs-dismiss="modal">Close</button>
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
                                <form dir="rtl"  method="post" action="{{config('app.url'); }}/api/make_cv_order">
                                    <div class="form-group"    hidden  >
                                        <input name="cv_id" id="cv_id" type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    <div class="form-group"    hidden  >
                                        <input name="office_id" id="office_id" type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    <div class="form-group" dir="rtl" style="padding:3px;" >
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" الاسم" required>
                                    </div>
                                    <div class="form-group" style="padding:3px;">
                                        <input name="phone" id="model_phone_id" type="number" class="form-control" placeholder="رقم جوالك" dir="rtl" required>
                                    </div>
                                    <div class="form-group" style="padding:3px;">
                                        <select name="branch_id" class="form-control" >
                                            <option value="0">اختر الفرع (اختياري)</option>
                                    @foreach ($branches as $branch)

                                    <option value="{{$branch->id}}">{{$branch->name}}</option>

                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group" style="padding:3px;">
                                    <select name="user_id" class="form-control" >
                                        <option value="0">اختر الموضف (اختياري)</option>
                                @foreach ($emps as $emp)
                                <option value="{{$emp->id}}">{{$emp->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <select name="user_id" class="form-control" >
                                    <option value="0">ليس لدي تاشيرة</option>
                                    <option value="1">لدي تأشيرة</option>
                                </select>
                                </div>
                                <br>
                                <br>
                                <div class="text-center">
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
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/fa-pro.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>
    <script type="text/javascript">
      //  alert("wwe");
        //return true; // prevents browser error messages  
        //localStorage.setItem("verified", "0");
        $('.otp').on('show.bs.modal', function (event) {
                if(localStorage.getItem("verified")=="1"){
                  //$('#exampleModal').modal('toggle');
                }
                  else{
                    
                      var office_id = $(event.relatedTarget).data('office_id');
                      window.location.href = '/otp_ar/'+office_id;
                      $('#exampleModal').modal('toggle');
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
        })
  </script> 
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>

