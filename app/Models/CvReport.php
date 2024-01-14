<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvReport extends Model
{
    use HasFactory;
    protected $table = 'cvs';
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

        return $this->hasMany(Follow_up::class);
            }


        






            public function Experience(){

                return $this->belongsTo(Experience::class);

                    }
        










}
