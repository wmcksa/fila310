<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center"  >
				<div class="col-md-6 col-lg-12">
					<div class="login-wrap p-4 p-md-5">
                        <form id="myform1" action="<?php echo e(url('/store')); ?>" method="POST" dir="rtl" class="login-form" onsubmit="process(event)" >
                              <?php echo csrf_field(); ?>
                                <!-- 2 column grid layout with text inputs for the first and last names -->

                                <input type="hidden" name="office_id" value="<?php echo e($user->id); ?>">
                                <div class="row mb-4">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="country_id"  id="name_id" class="form-control" type="text"      placeholder="الدول  ">
                                                <option value="" disabled selected> اختر الدوله</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="job_id"  id="name_id" class="form-control" type="text"      placeholder="الدول  ">
                                                  <option value="" disabled selected> اختر المهنه</option>
                                                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($job->id); ?>"><?php echo e($job->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="type_of_estgdam_id"  id="name_id" class="form-control" type="text" placeholder="انواع الاستقدام">
                                                <option value="" disabled selected> اختر نوع الاستقدام</option>
                                                    <?php $__currentLoopData = $types_of_estgdam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_of_estgdam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($type_of_estgdam->id); ?>"><?php echo e($type_of_estgdam->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="kh"  id="name_id" class="form-control" type="text"  placeholder="الخبره">
                                                <option value="" disabled selected> اختر الخبره</option>
                                                    <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($experience->id); ?>"><?php echo e($experience->experience); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                    <div data-mdb-input-init class="form-outline">
                                        <select    name="religion_id"  id="name_id" class="form-control" type="text"      placeholder="الديانه">
                                            <option value="" disabled selected> اختر الديانه</option>
                                                <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $religion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($religion->id); ?>"><?php echo e($religion->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="age_range"  id="name_id" class="form-control" type="text" placeholder="الديانه">
                                                <option value="" disabled selected> اختر العمر</option>
                                                <option value="20-25"> 25-20</option>
                                                <option value="25-30"> 30-25</option>
                                                <option value="30-35"> 35-30</option>
                                                <option value="35-40"> 40-35</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                



                                <div class="form-group">
								<button type="submit" id="submit_button_1" class="btn btn-primary rounded submit p-3 px-5">بحث</button>
							</div>
                                
                                <!-- Submit button -->
                                <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4" style="width: 50%;">Sign up</button> -->

  
</form>
			  
	        </div>
				</div>
			</div>
		</div>
	</section>





<?php /**PATH E:\xampp\htdocs\cv\resources\views/frontend/searchBar.blade.php ENDPATH**/ ?>