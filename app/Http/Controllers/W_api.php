<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cv_order;
use Illuminate\Support\Facades\Redirect;
class W_api extends Controller
{
   
    function send_w_app_msg($number,$msg) {
        
              $number=str_replace('+', '', $number);
              $number=str_replace(' ', '', $number);
              $msg=str_replace(' ', '%20', $msg);
              
              //echo $number;
              //echo $msg;
         
                $ch = curl_init();
                $url = "http://clp.wmc-ksa.com/w_api/index.php?to=".$number."&&body=".$msg."&&token=rzv54gobiaasgqsy&&instance=instance75972";
             
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 80);
                $response = curl_exec($ch);
                if(curl_error($ch)){
                  return 'Request Error:' . curl_error($ch);
                }else{
                    return $response;
                }
            
                curl_close($ch);
                 
              }
        
}