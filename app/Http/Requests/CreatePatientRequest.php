<?php

namespace Bioctor\Http\Requests;
use Auth;

use Illuminate\Foundation\Http\FormRequest;
use Bioctor\patient;

class CreatePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function uploadPatientImage(){

        //upload 
        $uploadedImage= $this->image;
        $this->fileName = Auth::user()->name.'_'.uniqid().'.'.$uploadedImage->getClientOriginalExtension();
        //str_slug($this->patient_name)
       // storeAs($path, $name, $options = [])
        $uploadedImage->storeAs(
            'patient',$this->fileName
        );

        return $this;

    }

    public function storePatientImage(){

        patient::create([
               'user_id' => Auth::id(),
               'patient_name' => $this->patient_name,
               'slug' => str_slug($this->patient_name),
               'age' => $this->age,
               'sex' => $this->sex,
               'case_title' => $this->case_title,
               'case_des' => $this->case_des,
               'blood_group' => $this->blood_group,
               'report_image_url' => 'patient/'.$this->fileName
           ]);
    }
}
