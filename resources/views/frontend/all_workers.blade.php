<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="shortcut icon" href="{{asset('assets/imgs/logo.svg')}} " type="image/x-icon">

    <!--style-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>استقدام</title>
</head>

<body>
    <header>
       

        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/imgs/logo.svg" alt="logo" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 115px;">
                    
                    <ul class="navbar-nav me-xl-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">خدماتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">خطوات الاستقدام</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">تواصل معنا</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="#">طلب استقدام</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!--main-slider-start-->
    <main class="main-slider">
        <div class="owl-carousel main-carousel owl-theme" style="height: 400px;">
            <div class="item">
                <div class="slider-img image-cover">
                    <img src="assets/imgs/slider-img.svg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="slider-img image-cover">
                    <img src="assets/imgs/01HGEG34SXV6TF6430G3GW69KC.jpg" alt="">
                </div>
            </div>
        </div>
    </main>
    <!--main-slider-end-->

    
    <section class="available-courses">
        <div class="container">
            
            <div class="row">
                @foreach($cvs as $cv)
                <div class="col-md-4 col-sm-6">
                    <div class="card card-1 shadow">
                        <div class="image-cover sameHeight">
                            <a href="course-details.html" class="stretched-link"></a>
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
                                   <a class="btn  p-2" style="background-color: var(--main-color);color:#fff">طلب التواصل</a>
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
                                    <img class="img-fluid" src="http://127.0.0.1:8000/storage/cv_pic/01HGD46B7M5MR673HDQR4R2CZN.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-right">
                            <button type="button" class="btn btn-sm btn-default" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach
                
            </div>

            

        </div>
    </section>
    <!--available-courses-end-->

    <!--footer-start-->
    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="about">
                        <img src="assets/imgs/logo.svg" alt="logo" class="logo">
                        
                        <div class="social">
                            <a href="#" target="_blank" class="icon insta">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="icon face">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" class="icon twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank" class="icon paypal">
                                <i class="fab fa-paypal"></i>
                            </a>
                            <a href="#" target="_blank" class="icon zoom">
                                <i class="fas fa-video"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-us">
                        <i class="fal fa-headset"></i>
                        <div class="text">
                            <p>للاستفسار ؟ تواصل معنا</p>
                            <h5 class="call-links">
                                <a href="tel:(0600)874548" dir="ltr">(0600) 874 548</a>
                                <span>,</span>
                                <a href="tel:(800)80018588" dir="ltr">(800) 8001 8588</a>
                            </h5>
                        </div>
                    </div>
                    <div class="our-contact-info">
                        <h5>معلومات التواصل</h5>
                        <p>الخبر , المملكه العربيه السعوديه </p>
                    </div>
                </div>
            </div>
        </div>
        
    </footer> -->
    <!--footer-end-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/fa-pro.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/fslightbox.js')}}"></script>




    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $(".main-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            mouseDrag: false,
            touchDrag: false,
            items: 1,
            rtl: true,
            animateOut: "fadeOut",
            navText: [
                "<i class='fal fa-chevron-right'></i>",
                "<i class='fal fa-chevron-left'></i>",
            ],
        });
        $('.teachers-carousel').owlCarousel({
            loop: false,
            margin: 22,
            nav: false,
            rtl: true,
            dotsEach: 3,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        })
        $('.managers-carousel').owlCarousel({
            loop: false,
            margin: 22,
            nav: false,
            dots: false,
            rtl: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                }
            }
        })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>