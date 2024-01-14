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
                            <a class="nav-link" href="#about">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">خدماتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">خطوات الاستقدام</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">تواصل معنا</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="{{route('all_workers')}}">طلب استقدام</a>
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

    <!--welcome-start-->
    <section id="about" class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <h4 class="title-one">متخصصون في إستقدام وتوظيف الكوادر المهنية من جميع انحاء العالم</h4>
                    <h6 class="text">
                    خبرة أكثر من ١٥ عام في مجال إستقدام الكفاءات المهنية و العمالة المميزة لجميع الأنشطة التجارية ( المستشفيات و المراكز الطبية - الصالونات و المشاغل - الكافيهات و المطاعم - مراكز المساج و العلاج الطبيعي - شركات و مؤسسات المقاولات- الشركات و المؤسسات التجارية - الفنادق - شركات و مؤسسات النقل البري ) لجميع مدن و مناطق المملكة و لدول الخليج العربي.
                    </h6>
                    <ul>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>شركة إستقدام معتمدة من وزارة الموارد البشرية بالمملكة العربية السعودية.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>تقديم كافة الخدمات و الاستشارات للموارد البشرية ورواد الأعمال.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>عقود موثقة و مصدقة من البولو ( مكتب العمل الفلبيني بالرياض ) و السفارة الفلبينية بالرياض.</p>
                        </li>
                        <li>
                            <i class="fal fa-chevron-right"></i>
                            <p>استقدام العمالة الفلبينية المهنية للشركات و المؤسسات و المستشفيات وغيرها.</p>
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


    <!-- section start -->
		<!-- ================ -->
		<section id="services" class="services general-section">
        <div class="container">
          <div class="custom-head">
            <div class="heading">
              <h1>
                خدماتنا 
              </h1>
              <p>
                نوفر خدماتنا لجميع مناطق المملكه
              </p>
            </div>

            <a href="services.html" class="see-more primary-color">
              <div class="icon-contain">
                <img
                  src="assets/images/icons/arrow.svg"
                  loading="lazy"
                  alt="" />
              </div>

              <span>
                كل الخدمات
              </span>
            </a>
          </div>

          <div class="row">
            <div class="col-lg-6 col-12 mb-3 custom-service-box">
              <div class="service-box">
                <div class="image-content">
                  <img
                    src="assets/images/services/service_1.svg"
                    loading="lazy"
                    alt="" />
                </div>

                <div class="contain">
                  <h2>
                    تصميم الهوية التجارية
                  </h2>

                  <p>
                    تعد الهوية البصرية من أهم عوامل نجاح كل
                    المشاريع والمؤسسات، لذلك تهتم شركة
                    تكنورافت بانشاء هوية بصرية مميزة
                    ... لمشروعك من الصفر
                  </p>

                </div>
              </div>
            </div>

            <div class="col-lg-6 col-12 mb-3 custom-service-box">
              <div class="service-box">
                <div class="image-content">
                  <img
                    src="assets/images/services/service_2.svg"
                    loading="lazy"
                    alt="" />
                </div>

                <div class="contain">
                  <h2>
                    تصميم وتطوير المواقع
                  </h2>

                  <p>
                    موقعك الالكتروني هو واجهتك على الانترنت
                    لذلك تهتم تكنورافت بإضفاء طابع خاص ومميز
                    لموقعك الالكتروني، لتصل لعملائك بالشكل
                    ... الذي يليق بك وبمشروعك
                  </p>

                  
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-12 mb-3 custom-service-box">
              <div class="service-box">
                <div class="image-content">
                  <img
                    src="assets/images/services/service_3.svg"
                    loading="lazy"
                    alt="" />
                </div>

                <div class="contain">
                  <h2>
                    تصميم وتطوير التطبيقات
                  </h2>

                  <p>
                    تقدم تكنورافت خدمة تصميم وتطوير تطبيقات
                    الهواتف الذكية، لتساعد في تحقيق أهداف
                    مشروعك، وذلك مع ضمان تصميم
                    ... التطبيق مميز و التكويد
                  </p>

                  
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-12 mb-3 custom-service-box">
              <div class="service-box">
                <div class="image-content">
                  <img
                    src="assets/images/services/service_4.svg"
                    loading="lazy"
                    alt="" />
                </div>

                <div class="contain">
                  <h2>
                    تصميم وتطوير أنظمة إدارة ومحاسبة
                  </h2>

                  <p>
                    تقدم شركة تكنورافت خدمة تحليل متكامل
                    للشركات و المؤسسات، و من ثم تصميم
                    ... و تطوير نظام إداري للشركة
                  </p>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
		<!-- section end -->

    <!--available-courses-start-->
    
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