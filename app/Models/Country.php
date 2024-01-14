<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class Country extends Model
{
    use HasFactory;

  

    protected $guarded = []; 


 
    public function country_relation (){

        return $this->hasMany(Cv::class);

        
            }

}
