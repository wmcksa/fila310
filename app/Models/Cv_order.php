<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class Cv_order extends Model
{
    use HasFactory;
    protected $guarded = []; 




 



    public function User(){

        return $this->belongsTo(User::class);
            }



            public function cv(){

                return $this->belongsTo(Cv::class);
                    }


                    public function owner(){

                        return $this->belongsTo(User::class,'owner_id','id');
                            }


                    
}
