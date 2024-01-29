<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'cv_update_time','cv_update_time2','site_name','site_url','phone','logo','website_login_form','office_id','recieve_orders_by_country'];
    
    protected $guarded = []; 

    
    
    public function getLogoAttribute(){
        if($this->attributes['logo']){
        return url('storage').'/'.$this->attributes['logo'];
        }else{
        }
    }
}
