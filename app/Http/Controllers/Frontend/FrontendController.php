<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Country;
use App\Models\Religion;
use App\Models\Follow_up;
use App\Models\Branch;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Type_of_estgdam;
use App\Http\Controllers\Controller;
use App\Models\Status;

use App\Models\Loginuser;
use App\Models\UsersReport;
use App\Models\Baner;
use App\Models\Setting;
use Session;
use Response;




class FrontendController extends Controller
{
   
    private $lang_code = "ar";



    public function index()
    {
        return view('frontend.index2');
    }

    
    public function test_join(){
    $one= Cv::
        join('jobs', 'cvs.job_id', '=', 'jobs.id')
        ->join('countries', 'cvs.country_id', '=', 'countries.id')
        ->join('follow_ups', 'cvs.id', '=', 'follow_ups.cv_id')
        
        ->select('cvs.*', 'jobs.name as job_name','countries.country')->get();

        $two=$one->toQuery();
        $three=$two->get();
        return $one;
        //return $three;

        

    }
    
    
    public function getDownload($id)
{
    $cv = Cv::where('id',$id)->first();
    // dd($cv->cv_file);
    //PDF file is stored under project/public/download/info.pdf
    $file= $cv->cv_file;

    $headers = [
              'Content-Type' => 'application/pdf',
           ];

        // dd($file);    

    return response()->download($file, 'filename.pdf', $headers);
}




    public function test( )
    {
        $users = UsersReport::join('cvs', 'users.id', '=', 'cvs.user_id')->get(['users.*', 'cvs.name as wwe']);
        $objects=array(
            "count"=>"1",
            "sum"=>"2"
          
        );
   

    $json=json_encode($objects,JSON_UNESCAPED_SLASHES);
    $json=json_decode($json);

    $users->push($json);

     return $users ;
        //return $json ;
       

    }



    public function login_ar( )
    {
        $settings = Setting::first();
        return view('frontend.login_ar',compact('settings'));
    }

    public function index_ar($id)
    {
       $user = User::where(
        [
            "id" => $id,
            "user_type" => "admin"
        ])->first();

        if($user){

        $lang_code= $this->lang_code;
        $baners = Baner::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();
        $follow_ups = Follow_up::where('office_id',$user->id)->get();
        $cvs=Cv::where(['lang'=>$lang_code,'office_id'=>$user->id,'blocked'=>0])->get();

        $countries = Country::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();
        $jobs= Job::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $types_of_estgdam = Type_of_estgdam::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $religions = Religion::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $branches = Branch::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $experiences = Experience::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $settings = Setting::where('office_id',$user->id)->first();

        $emps = User::where(['user_type'=>'employee','manager_id'=>$id])->get();
        

        foreach ($cvs as $cv) {
            $cv['final_status']= $this->get_cv_state($cv->id,$user);
            }

            return view('frontend.index_ar',compact('settings','experiences','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','emps','user'));

        }
        else{
            Session::flash('message', 'لايوجد بيانات بهذا العنوان!'); 
            Session::flash('alert-class', 'alert-danger');
            return view('frontend.index_ar');
        }
    }

    




    public function search_ar(Request $request)
    {
        // dd($request->all());
        $user = User::where("id",$request->office_id)->first();
        $lang_code= $this->lang_code;


        $cvs = Cv::query();
        if($request->filled('country_id')){
        $cvs = $cvs->where('country_id', $request->country_id);
        }
        
        if($request->filled('job_id')){
            $cvs = $cvs->where('job_id', $request->job_id)->where('blocked',0);
        }
        if($request->filled('experience_id')){
            $cvs = $cvs->where('experience_id', $request->experience_id);
        }
        if($request->filled('type_of_estgdam_id')){
            $cvs = $cvs->where('type_of_estgdam_id', $request->type_of_estgdam_id);
        }
        if($request->filled('religion_id')){
            $cvs = $cvs->where('religion_id', $request->religion_id);
        }

        if($request->filled('age_range')){

        $age_range= explode("-", $request->age_range)  ;
        $age_from=$age_range[0];
        $age_to=$age_range[1];
        $cvs = $cvs->whereBetween('age', [$age_from, $age_to]);
        }
    
        
        $cvs = $cvs->orderBy('created_at','desc')->where(['lang'=>$lang_code,'office_id'=>$user->id])->paginate(10);







        $baners = Baner::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();
        $follow_ups = Follow_up::where('office_id',$user->id)->get();

        $countries = Country::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();
        $jobs= Job::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $types_of_estgdam = Type_of_estgdam::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $religions = Religion::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $branches = Branch::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $experiences = Experience::where(['lang'=>$lang_code,'office_id'=>$user->id])->get();

        $settings = Setting::where('office_id',$user->id)->first();

        $emps = User::where(['user_type'=>'employee','manager_id'=>$user->id])->get();

        foreach ($cvs as $cv) {
            $cv['final_status']= $this->get_cv_state($cv->id,$user);
            }
                return view('frontend.index_ar',compact('settings','experiences','emps','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','user'));
                //return view('frontend.index',compact('settings',experiences','emps','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches'));

            

    }

    public function get_cv_state($cv_id,$user){
        try {
            $cv_fp=Follow_up::where(['cv_id'=>$cv_id,'office_id'=>$user->id])->orderBy('id', 'DESC')->first();
            if (is_null($cv_fp))
            {

                return "";
            }

            else{
                $status=Status::where('id',$cv_fp->status_id)->first();
                return   $status->name;
            }
       
        }
          catch(Exception $e) {

            return "";
          }


    }

    public function   insert_login_user(Request $request)
    {

        //echo "insert_login_user ok";
        
        $data=$request->all();

        Loginuser::create($data);

        return redirect()->route('index_ar');

    }

}
