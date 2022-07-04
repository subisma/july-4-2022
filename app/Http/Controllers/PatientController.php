<?php

namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function insert(){
        $pat=new Patient();
        $pat->name="motiman bacharya";
        $pat->dob="2040/12/22";
        $pat->mobile="55555554";
        $pat->save();
    }
    
    function viewPatient(){
        $patient=Patient::all();
        $data=array('a'=>$patient);
        return view('patient',$data);
    }





























    
   
         function updatePatient(){
             $tin=Patient::find(1);
             $tin->name="hari kumar gurung";
              $tin->save();
                        
                    }
                    function deletepatient(){
                        patient::find(2)->delete();
                    }
            

}
