<form action="{{url('/store')}}" method="POST" dir="rtl">
    @csrf
    <div class="row rtl filter">
        <div class="row">

    
    <!-- بداية اختر الدولة  -->
    <div class="col-lg-2 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="country_id" class="form-control" data-target="0">
                <option value="0"> كل الدول    </option>
                @foreach ($countries as $country)
                 
                <option value="{{$country->id}}">{{$country->country}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- نهاية اختر الدوله  -->

    <!-- بداية اختر الوظيفة -->
    <div class="col-lg-3 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="job_id" class="form-control"  data-target="1">
                <option value="0">   كل المهن   </option>
                @foreach ($jobs as $job)
                <option value="{{$job->id}}">{{$job->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- نهاية  اختر  الوظيفة  -->

    <!-- بداية اختر نوع الاستقدام  -->
    <div class="col-lg-3 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="type_of_estgdam_id" class="form-control"  data-target="2">
                <option value="0">كل انواع الاســتــقــدام    </option>
                @foreach ($types_of_estgdam as $type_of_estgdam)
                <option value="{{$type_of_estgdam->id}}">{{$type_of_estgdam->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- نهاية  اختر نوع الاستقدام  -->

    {{-- <div class="col-lg-2 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">الخبرة </label>
            <select class="form-control"name="kh"  data-target="3">
                <option></option>
                <option value="8">لم يسبق لها العمل</option>
                <option value="9">سبق لها العمل</option>
            </select>
        </div>
    </div> --}}

    <!-- start اختر الديانه  -->
    <div class="col-lg-2 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="religion_id" class="form-control" data-target="4">
                <option value="0">كل الديانات   </option>
                @foreach ($religions as $religion)
                <option value="{{$religion->id}}">{{$religion->name}}</option>
                @endforeach
            </select>
        </div>
    </div>




    <div class="col-lg-2 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="experience_id" class="form-control" data-target="4">
                <option value="0">كل الخبرات     </option>
                @foreach ($experiences as $experience)
                <option value="{{$experience->id}}">{{$experience->experience}}</option>
                @endforeach
            </select>
        </div>
    </div>








   


    <div class="col-lg-2 col-md-3">
        <div class="input-group input-group-outline mb-3">
            <select name="age_range" class="form-control" data-target="4">
                <option value="18-50">  كل الاعمار</option>
                <option value="20-25"> 25-20</option>
                <option value="25-30"> 30-25</option>
                <option value="30-35"> 35-30</option>
                <option value="35-40"> 40-35</option>
                
            </select>
        </div>
    </div>




    <div class="col-12 col-lg-2 col-md-3 text-center">
        {{-- <span class="btn btn-primary">بحث</span> --}}
        <button type="submit" class="btn btn-primary">بحث</button>
      
    </div>


    <div class="col-12 col-lg-2 col-md-3 text-center">
        
        <!--
        <button type="submit" class="btn btn-primary">بحث مقارب</button>
        -->
    </div>



    </div>
                    </form>