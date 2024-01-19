<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'cv_update_time','cv_update_time2','site_name','site_url','phone','logo','website_login_form','office_id'];
    
    protected $guarded = []; 
}
