<?php

namespace Bioctor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patient extends Model
{
    use SoftDeletes;

    

       protected $fillable = [
         //  'user_id','patient_name', 'age', 'sex', 'case_title','case_des','blood_group','report_image_url'

         'user_id','patient_name', 'slug', 'age', 'sex', 'case_title','case_des','blood_group','report_image_url'
       ];

//        public function patients()
// {
//     return $this->hasMany('Bioctor\User', 'user_id');
// }


       public function user()
        {
          //  return $this->belongsTo();

           // return $this->hasMany(User::class);
        }

}
