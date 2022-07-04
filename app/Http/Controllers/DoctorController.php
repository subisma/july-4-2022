<?php

namespace App\Http\Controllers;
use App\Models\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function add(){
        $tin=new Doctor ();
        $tin->name="bikash chandra bastola";
        $tin->specialist="Neurologist";
        $tin->phone="12233333";
        $tin->education="MBBS";
        $tin-> save();

    }
  
    function viewDoctor(){
        $doctor=Doctor::all();
        $data=array('a'=>$doctor);
        return view('doctor',$data);
    }





























    
   
         function updateDoctor(){
             $tin=Doctor::find(1);
             $tin->name="bishnu kumar gurung";
              $tin->save();
                        
                    }
                    function deleteDoctor(){
                        doctor::find(6)->delete();
                    }
            
    
    
}

