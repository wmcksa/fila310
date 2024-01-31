<!doctype html>
<html lang="ar" dir="rtl">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
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
    
  <!--style-->
  <!-- <link rel="stylesheet" href=" <?php echo e(asset('login/css/style.css')); ?>   "> -->

<!--style-->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
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


      <title><?php echo e($settings->site_name??""); ?></title>    

  </head>


<?php if(isset($user)): ?>
  <body>
    <div class="text-center mb-2 " style =" background: #ffffff!important; color: rgb(255, 255, 255)     ">
        <br>
        
          <a class="" href="#">
            <img src="<?php if($settings): ?><?php echo e($settings->logo); ?><?php else: ?> url('storage/logo/01HGEJE1EBTJE1GE7BZHQAAGXX.png') <?php endif; ?>" alt="" width="120px" height="120px">
          </a>
    
      <br>
        <h3 style="color:black">
 
            <?php echo e($settings->site_name??""); ?>

    
        </h3>
        <br>
      </div>
 
      <div class="">
    
        <nav class="navbar  fixed-top navbar-light bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand" href="   <?php echo e($settings->site_url??""); ?>">موقعنا الالكتروني </a>
              <a class="navbar-brand" href="https://musaned.com.sa/home">  مساند</a>
              <?php if($settings): ?><a class="navbar-brand" href="https://wa.me/<?php echo e($settings->phone); ?>">    وتساب</a><?php endif; ?>
              <?php if($settings): ?><a class="navbar-brand" href="tel:+<?php echo e($settings->phone); ?>">  اتصال  </a><?php endif; ?>
            </div>
          </nav>
    </div>
  </body>

    <div class="mt-1 mb-1">
        <?php echo $__env->make('frontend.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-1 mb-1">
        <?php echo $__env->make('frontend.searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  

    <div class="mt-1 mb-1">
      <section class="available-courses">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $cvs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-1 shadow">
                            <div class="image-cover sameHeight">
                                <div class="card-badge-1"><?php echo e($cv->age); ?><span>سنه</span></div>
                                <img src="<?php echo e(asset("storage/$cv->cv_pic")); ?>">
                            </div>
                            <div class="card-body">
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price" >الاسم :</p><span><?php echo e($cv->name); ?></span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price" >الدوله :</p><span><?php echo e($cv->country->country); ?></span>
                                    </div>
                                </div>
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price">الديانه :</p><span><?php echo e($cv->religion->name); ?></span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price"> المهنه :</p><span><?php echo e($cv->job->name); ?></span>
                                    </div>
                                </div>
                                <div class="card-more-info">
                                    <div class="students">
                                      <p class="price">رقم السيره الذاتيه :</p><span><?php echo e($cv->id); ?></span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <p class="price"> الحاله :</p><span><?php if($cv->final_status=="reserved"): ?> محجوز مؤقتا <?php elseif($cv->final_status==""): ?> متاح <?php else: ?> متاح  <?php endif; ?></span>
                                    </div>
                                </div>
                                
                                <div class="text-center pt-2">
                                      <a class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo e($cv->id); ?>">مزيد من المعلومات</a>
                                      <a href="<?php echo e($cv->cv_file); ?>" class="btn btn-info p-2" >عرض السيره الذاتيه</a>
                                      <a href="#<?php echo e($user->id); ?>" data-bs-toggle="modal"  data-cv_id="<?php echo e($cv->id); ?>" data-office_id="<?php echo e($user->id); ?>" class="btn  p-2" style="background-color: #8d448b;color:#fff;margin:3px;">طلب التواصل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop<?php echo e($cv->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                            <td><?php echo e($cv->name); ?></td>
                                                            </tr>
                                                            <th scope="col">رقم السيره الذاتيه</th>
                                                            <td><?php echo e($cv->id); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الراتب</th>
                                                            <td><?php echo e($cv->salary); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">العمر</th>
                                                            <td><?php echo e($cv->age); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الدوله</th>
                                                            <td><?php echo e($cv->country->country); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">المهنه</th>
                                                            <td><?php echo e($cv->job->name); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الديانه</th>
                                                            <td><?php echo e($cv->religion->name); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الخبره</th>
                                                            <td><?php echo e($cv->experience->experience); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">مكان الخبره</th>
                                                            <td><?php echo e($cv->experienceLocation); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">نوع الاستقدام</th>
                                                            <td><?php echo e($cv->Type_of_estgdam->name); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">مستوي التعليم</th>
                                                            <td><?php echo e($cv->education->name??""); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">رسوم النقل</th>
                                                            <td><?php echo e($cv->transportFees); ?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="col">الحاله</th>
                                                            <td><?php if($cv->final_status=="reserved"): ?> محجوز مؤقتا <?php elseif($cv->final_status==""): ?> متاح <?php else: ?> متاح  <?php endif; ?></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <img class="img-fluid" src="<?php echo e(asset("storage/$cv->cv_pic")); ?>" alt="">
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
                    <div class="modal fade otp" id="<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> </h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form dir="rtl"  method="post" action="<?php echo e(route('make_cv')); ?>">
                                  <?php echo csrf_field(); ?>
                                    <div class="form-group"    hidden  >
                                        <input name="cv_id" id="cv_id"  type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    <div class="form-group"    hidden  >
                                        <input name="office_id" id="office_id" type="text" class="form-control"  dir="rtl" required>
                                    </div>
                                    
                                    <div class="form-group" dir="rtl" style="padding: 3px;" >
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" الاسم" required>
                                    </div>
                                    <div class="form-group" style="padding: 3px;">
                                        <input name="phone" id="model_phone_id" type="number" class="form-control" readonly="readonly" placeholder="رقم جوالك" dir="rtl">
                                    </div>
                                    <div class="form-group" style="padding: 3px;">
                                        <select name="branch_id" class="form-control" >
                                            <option value="0">اختر الفرع (اختياري)</option>
                                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                                <div class="form-group" style="padding: 3px;">
                                    <select name="user_id" class="form-control" >
                                        <option value="0">اختر الموضف (اختياري)</option>
                                <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
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

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
</div>

<?php else: ?>

<?php if(Session::has('message')): ?>
<p class="alert text-center <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>
<?php endif; ?>

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

    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fa-pro.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fslightbox.js')); ?>"></script>
     
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script type="text/javascript">
    
      //  alert("wwe");
        //return true; // prevents browser error messages  
        //  localStorage.setItem("verified", "0");
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
  </script>


</body>
</html>

<?php /**PATH E:\xampp\htdocs\cv\resources\views/frontend/index_ar.blade.php ENDPATH**/ ?>