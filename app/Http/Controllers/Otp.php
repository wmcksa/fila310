<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cv_order;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\W_api;
class Otp extends Controller
{
     

    public function index_ar($id)
    {
        return view('frontend.otp_ar',compact('id'));
    }


    public function test_api( )
    {
         $ob = new W_api();
         $ob->send_w_app_msg("966568430828","hiiii");
    }

    public function get_code( Request $request)
    {
        LoginUser::create([
            "name"=>$request->name,
            "phone"=>$request->phone2
    ]);
       $rand= rand(1000,9999);
      $msg="your verification code is  ".$rand;
      $number=$request->phone2;
        //echo $number;
        $ob = new W_api();
        $ob->send_w_app_msg($number,$msg);
        //$this->send_w_app_msg($number,$msg);
        return $rand;
    }

}
