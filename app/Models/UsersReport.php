<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersReport extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = []; 


    public function Cv(){

        return $this->hasMany(Cv::class,'user_id','id');
            }


            public function cvs(){

                return $this->hasMany(Cv::class,'user_id','id');
                    }
}
