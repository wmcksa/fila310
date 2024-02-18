<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 


 

class Cv extends Model
{
    
 


    use HasFactory;
    protected $guarded = []; 


    public function Job(){

return $this->belongsTo(Job::class);
    }


    public function Country(){

        return $this->belongsTo(Country::class);
            }


            public function User(){

                return $this->belongsTo(User::class);
                    }


            public function Type_of_estgdam(){

                return $this->belongsTo(Type_of_estgdam::class);
                    }

                    public function Religion(){

                        return $this->belongsTo(Religion::class);
                            }

                            
        

                         
                        





    public function follow_ups(){

        return $this->hasMany(Follow_up::class,'cv_id','id');
            }


        






            public function Experience(){

                return $this->belongsTo(Experience::class);

                    }
                    public function education(){

                        return $this->belongsTo(Education::class);
        
                            }
                




public function getCvFileAttribute(){
         
        if($this->attributes['cv_file']){


        return url('storage').'/'.$this->attributes['cv_file'];
        }else{
            return null;
        }
    
    }








                





                    protected static function booted()
                    {
                      
                        static::creating(function ($model) {
                
                             
                
                          
                            


if(auth()->user()->user_type=="office"){

    $model['blocked']=1;

}









                            
                
                        });
                    }




    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $user=User::where('id',auth()->user()->id)->where('available',0)->where('user_type','admin')->first();
            if($user){
                    $cv_count =Cv::where('office_id',auth()->user()->id)->count();
                    if($cv_count >= 5 ){
                        dd("لا يمكن اضافه سير ذاتيه فعل اشتراكك الان");
                    }
            }
        });

         
    }


                    


}
