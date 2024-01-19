<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center"  >
				<div class="col-md-6 col-lg-12">
					<div class="login-wrap p-4 p-md-5">
                        <form id="myform1" action="{{url('/store')}}" method="POST" dir="rtl" class="login-form" onsubmit="process(event)" >
                              @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->

                                <input type="hidden" name="office_id" value="{{$user->id}}">
                                <div class="row mb-4">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="country_id"  id="name_id" class="form-control" type="text"      placeholder="الدول  " required>
                                                <option value="" disabled selected> اختر الدوله</option>
                                                    @foreach ($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->country}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="job_id"  id="name_id" class="form-control" type="text"      placeholder="الدول  ">
                                                  <option value="" disabled selected> اختر المهنه</option>
                                                    @foreach ($jobs as $job)
                                                    <option value="{{$job->id}}">{{$job->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="type_of_estgdam_id"  id="name_id" class="form-control" type="text" placeholder="انواع الاستقدام">
                                                <option value="" disabled selected> اختر نوع الاستقدام</option>
                                                    @foreach ($types_of_estgdam as $type_of_estgdam)
                                                    <option value="{{$type_of_estgdam->id}}">{{$type_of_estgdam->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <select    name="kh"  id="name_id" class="form-control" type="text"  placeholder="الخبره">
                                                <option value="" disabled selected> اختر الخبره</option>
                                                    @foreach ($experiences as $experience)
                                                    <option value="{{$experience->id}}">{{$experience->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                    <div data-mdb-input-init class="form-outline">
                                        <select    name="religion_id"  id="name_id" class="form-control" type="text"      placeholder="الديانه">
                                            <option value="" disabled selected> اختر الديانه</option>
                                                @foreach ($religions as $religion)
                                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                                                @endforeach
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
                                <div class="row mb-4">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-outline">
                                            <input name="code"  id="name_id" class="form-control" type="text"      placeholder="كود السيره الذاتيه">
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div data-mdb-input-init class="form-outline">
                                        <input name="phone"  id="name_id" class="form-control" type="text"      placeholder="رقم الهاتف">
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





