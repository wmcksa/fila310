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




class FrontendController extends Controller
{
   
    private $lang_code = "ar";



    public function index(){


        return view('frontend.index2');
    }

    public function all_workers(){

        $lang_code= $this->lang_code;
        $baners = Baner::where('lang',$lang_code)->get();
        $follow_ups = Follow_up::get();
        $cvs=Cv::where('lang',$lang_code)->where('blocked',0)->get();
        $countries = Country::where('lang',$lang_code)->get();
        $jobs= Job::where('lang',$lang_code)->get();
        $types_of_estgdam = Type_of_estgdam::where('lang',$lang_code)->get();
        $religions = Religion::where('lang',$lang_code)->get();
        $branches = Branch::where('lang',$lang_code)->get();
        $experiences = Experience::where('lang',$lang_code)->get();
        $settings = Setting::first();
        $emps = User::where('user_type','employee')->get();
        foreach ($cvs as $cv) {
            $cv['final_status']= $this->get_cv_state($cv->id);

            }



        return view('frontend.all_workers',compact('settings','experiences','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','emps'));
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

    public function index_ar( )
    {
        $lang_code= $this->lang_code;
        $baners = Baner::where('lang',$lang_code)->get();
        $follow_ups = Follow_up::get();
        $cvs=Cv::where('lang',$lang_code)->where('blocked',0)->get();
        $countries = Country::where('lang',$lang_code)->get();
        $jobs= Job::where('lang',$lang_code)->get();
        $types_of_estgdam = Type_of_estgdam::where('lang',$lang_code)->get();
        $religions = Religion::where('lang',$lang_code)->get();
        $branches = Branch::where('lang',$lang_code)->get();
        $experiences = Experience::where('lang',$lang_code)->get();
        $settings = Setting::first();
        $emps = User::where('user_type','employee')->get();
        foreach ($cvs as $cv) {
            $cv['final_status']= $this->get_cv_state($cv->id);
            }

          return view('frontend.index_ar',compact('settings','experiences','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','emps'));
        //return view('frontend.index',compact('settings','experiences','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','emps'));
    }




    public function search_ar(Request $request)
    {


//         $orders = Order::query();
//         if($request->filled('id')){
//         $orders = $orders->where('id', $request->id);
//         }
//         if($request->filled('from')){
//             $orders = $orders->whereDate('created_at', '>=', Carbon::parse($request->from));
//         }
//         if($request->filled('to')){
//             $orders = $orders->whereDate('created_at', '<=', Carbon::parse($request->to));
//         }
//         if($request->filled('status')){
//             $orders = $orders->where('status', $request->status);
//         }
//         if($request->filled('payment_way')){
//             $orders = $orders->where('payment_way', $request->payment_way);
//         }
//         if($request->filled('commission_payment')){
//             $orders = $orders->where('commission_payment', $request->commission_payment);
//         }
//         if($request->filled('client_id')){
//             $orders = $orders->where('client_id', $request->client_id);
//         }
//         if($request->filled('company_id')){
//         $orders = $orders->where('company_id', $request->company_id);
//         }
// //        if($request->has('product_size')){
// //            $orders = $orders->where('size', $request->product_size);
// //        }
// //        if($request->has('product_state')){
// //            $orders = $orders->where('', $request->company_id);
// //        }
//         $orders = $orders->orderBy('created_at','desc')->paginate(10);





        dd($request->all());
        $lang_code= $this->lang_code;
        //echo "search";
        $age_range= explode("-", $requet->age_range)  ;
        $age_from=$age_range[0];
        $age_to=$age_range[1];
        try {
            $fiter = $requet->validate([
                'country_id'=>'required',
                'job_id'=>'required',
                'type_of_estgdam_id'=>'required',
                'religion_id'=>'required',
            ]);
            $cvs = Cv::query();
     if($requet->job_id !=="0"){

    $cvs->where('job_id',$requet->job_id)->
    where('blocked',0);
    //echo "jop id condition hit ";


 }
 else{
    //echo "jop id condition not hit ";

 }

 if($requet->country_id !=="0"){
    
    $cvs->where('country_id',$requet->country_id);
 }

 if($requet->type_of_estgdam_id !=="0"){
    
    $cvs->where('type_of_estgdam_id',$requet->type_of_estgdam_id);
 }


 if($requet->religion_id !=="0"){
    
    $cvs->where('religion_id',$requet->religion_id);
 }


 if($requet->experience_id !=="0"){
    
    $cvs ->where('experience_id',$requet->experience_id);
 }

                $cvs->where('lang',$lang_code)
                ->whereBetween('age', [$age_from, $age_to]);

                

$cvs=$cvs->get();
                 

                //$cvs = Cv::query()->get();

                /*
                $countries = Country::all();
                $jobs= Job::all();
                $types_of_estgdam = Type_of_estgdam::all();
                $religions = Religion::all();
               
*/

$follow_ups = Follow_up::all();




                $countries = Country::
                where('lang',$lang_code)->
                get();
        
        
                $jobs= Job::
                where('lang',$lang_code)->
                get();
        
        
        
                $types_of_estgdam = Type_of_estgdam::
                where('lang',$lang_code)->
                get();
        
                $religions = Religion::
                where('lang',$lang_code)->
                get();
        
        
                $branches = Branch::
                where('lang',$lang_code)->
                get();
        



                $baners = Baner::
                where('lang',$lang_code)->
                get();


                $emps = User::where('user_type','employee')->get();


                $experiences = Experience::
                where('lang',$lang_code)->
                get();


                $settings = Setting::
     
                first();
        

                //return $cvs;

                return view('frontend.index_ar',compact('settings','experiences','emps','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches'));
                //return view('frontend.index',compact('settings',experiences','emps','baners','follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches'));








            } 

        catch (\Throwable $th) {

            echo $th;
            
            echo '<script type="text/javascript">
                
            alert("    لم يتم العثور على نتائج   ");
           
            window.history.back();
            </script>
            
            ';


         //sleep(3000);

            //return redirect()->route('home');

        }


    }













    public function get_cv_state($cv_id){

        try {
        $cv_fp=Follow_up::where('cv_id',$cv_id)->orderBy('id', 'DESC')->first();
        

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
