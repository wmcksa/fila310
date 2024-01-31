<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.rtl.min.css')); ?>" />

    <!--google-font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

    <!--owl-carousel-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.css')); ?>">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <!--favicon-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/imgs/logo.png')); ?> " type="image/x-icon">




    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <title>استقدام</title>
</head>

<body>
    <header>
       

        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                    <img src="assets/imgs/logo.png" alt="logo" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 115px;">
                    
                    <ul class="navbar-nav me-xl-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('index')); ?>">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">معلومات عنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">مميزاتنا</a>
                        </li>

                        
                    </ul>

                </div>


                <div class="col-lg-4 d-flex align-items-center justify-content-lg-end justify-content-center">
                        <div class="links">
                            <i class="fal fa-user"></i>
                            <a href="<?php echo e(url('admin/login')); ?>" class="sign-in">تسجيل الدخول</a>
                            <a href="<?php echo e(url('admin/register')); ?>" class="sign-up">حساب جديد</a>
                        </div>
                    </div>


            </div>
        </nav>
    </header>

    <!--main-slider-start-->
    <main class="main-slider">
        <div class="owl-carousel main-carousel owl-theme" style="height: 400px;">
            <div class="item">
                <div class="slider-img image-cover">
                    <img src="assets/imgs/slider1.jpeg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="slider-img image-cover">
                    <img src="assets/imgs/slider2.jpeg" alt="">
                </div>
            </div>
        </div>
    </main>
    <!--main-slider-end-->

    <!--welcome-start-->
    <section id="about" class="services general-section">
            <div class="container">
                <div class="custom-head">
                    <div class="heading">
                    <h1>
                        معلومات عن استقدم 
                    </h1>
                    
                    </div>

                    
                </div>

            <div class="row">
                <div class="col-lg-12 col-12 mb-3 custom-service-box">
                <div class="service-box">
                    

                    <div class="contain">
                    
                    <p>
                      مانقدمه يختلف تماما عن منافسينا فنحن نهتم بالاداء والجوده لتصل خدمه تفوف كل توقعاتكم وباستخدامك ل استقدم يساعدك في اختيار الايدي العامله المناسبه تعرف اكثر علي معلومات اكثر علي استقدم والذي يساعدك اكثر علي استقطاب العماله من الخارج ...

 

                    </p>

                    </div>
                </div>
                </div>

                
            </div>
            </div>
        </section>
    <!--welcome-end-->


    


<!--welcome-start-->
<section id="services" class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <h4 class="title-one">متخصصون في إستقدام وتوظيف الكوادر المهنية من جميع انحاء العالم</h4>
                    
                    <ul>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>إمكانية اضافة السير الذاتيه مفلترة حسب ( الدوله - المهنه -  نوع الاستقدام - الخبره - الديانه )</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>إمكانية اضافة السير الذاتيه من قبل المكاتب الخارجية وكل مكتب له يوزر منفصل </p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>اضافة موظفين  لاستلام طلبات العملاء </p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>إمكانية تحديد موظف او فرع معين عن طلب سيرة ذاتية</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>إمكانية  تجميع بيانات العملاء وإعادة استهدافهم </p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>تقارير خاصة بالموظفين لمتابعة ادائهم </p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>تقارير شاملة خاصة بالسير الذاتية </p>
                        </li>
                    </ul>
                    
                </div>
                <div class="col-md-6">
                    <img src="assets/imgs/people-job.avif" alt="welcome">
                </div>
            </div>
        </div>
    </section>
    <!--welcome-end-->



    <footer class="text-center bg-body-tertiary">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1"href="https://www.facebook.com/wmcksa"role="button"data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                    <!-- Twitter -->
                    <a
                        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1"href="https://twitter.com/WMC_ksa"role="button"data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
                    <!-- Instagram -->
                    <a
                        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1"href="https://wmc-ksa.com/"role="button"data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a
                        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1"href="https://www.linkedin.com/in/wmc-for-marketing-5444b2257/"role="button"data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            النافذه للتسويق - جميع الحقوق محفوظه
            <a class="text-body" href="https://wmc-ksa.com/">النافذه للتسويق الالكتروني</a>
        </div>
        <!-- Copyright -->
</footer>

    <!--footer-end-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/fa-pro.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fslightbox.js')); ?>"></script>




    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
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
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
    
      //  alert("wwe");
        //return true; // prevents browser error messages  
        //  localStorage.setItem("verified", "0");
        $('#ddd').on('show.bs.modal', function (event) {
                if(localStorage.getItem("verified")=="1"){
                  //$('#exampleModal').modal('toggle');
                }
                  else{
                    
                      var office_id = $(event.relatedTarget).data('office_id');
                      alert(office_id);
                      window.location.href = '/otp_ar/'+office_id;
                      
                    //   $('#ddd').modal('toggle');
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
    
    
    
    
    
    
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html><?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/resources/views/frontend/index2.blade.php ENDPATH**/ ?>