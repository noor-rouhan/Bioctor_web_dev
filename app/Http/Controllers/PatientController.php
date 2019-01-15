<?php

namespace Bioctor\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Bioctor\Http\Requests\CreatePatientRequest;
use Bioctor\patient;
use Bioctor\User;
//use Bioctor\Http\Requests\Auth;


class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $patients = User::findOrFail($id)->patients->toJson();
        //$items = Items::all()
        //return 'json'->with('patients', json_decode($patients, true));
        $patients_j = json_decode($patients, true);
        return view('patient.userDashboard', ["patients_j"=>$patients_j]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $id = Auth::user()->id;
        $patients = User::findOrFail($id)->patients->toJson();
        //$items = Items::all()
        //return 'json'->with('patients', json_decode($patients, true));
        $patients_j = json_decode($patients, true);
       // return view('patient.userDashboard', ["patients_j"=>$patients_j]);
       // return view('patient.userDashboard')->with('patients', json_decode($patients, true));;
        return view('patient.patientInput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePatientRequest $request)
    {
        

        //'user_id','patient_name', 'age', 'sex', 'case_title','case_des','blood_group','report_image_url'

        $request->uploadPatientImage()
                ->storePatientImage();
         
        return redirect()->back();

        //return redirect('/api/patient/edit/create');
    



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //dd(User::with(['patient'])->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function patient_input_panel(){

        // $id = Auth::user()->id;
        // $patients = User::findOrFail($id)->patients->toJson();
        // //$items = Items::all()
        // //return 'json'->with('patients', json_decode($patients, true));
        // $patients_j = json_decode($patients, true);
        // return view('patient.userDashboard', ["patients_j"=>$patients_j]);
       // return view('patient.userDashboard')->with('patients', json_decode($patients, true));;
        return \View::make("patient.patientInput");
       // return view('patient.patientInput');
    }
}
