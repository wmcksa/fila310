<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    use HasFactory;
    protected $table = 'langs';
    protected $guarded = []; 




    /*
    protected static function booted()
    {
      
        static::creating(function ($model) {

             

            $model['name']='ali';
           

        });
    }

*/



}
