<?php
namespace App\Http\Controllers;
use App\Models\Vehicle;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    function bus()
    {
        $tin = new Vehicle();
        $tin -> name="microbus";
        $tin -> brand ="sumo";
        $tin -> Color ="brown";
        $tin -> cc ="400cc";
        $tin -> transmission="pessenger";
            
         $tin->save();
        
        }
  
       
    //     function truck(){
    //         $for = new Vehicle();
    //         $for -> name="truck";
    //         $for -> brand ="TATA";
    //         $for -> Color ="brown";
    //         $for -> cc ="400cc";
    //         $for -> transmission="5000kg";
    //         $for-> save();
            
    //         }
    //         function car(){
    //             $for = new Vehicle();
    //             $for -> name="Car";
    //             $for -> brand ="BMW";
    //             $for -> Color ="RED";
    //             $for -> cc ="400cc";
    //             $for -> transmission="TOURIST";
    //             $for-> save();
                
    //             }

function viewVehicle(){
    $test=vehicle::find(2);
    echo $test->name;
}

function insertVehicle(){
   
}
     function updateVehicle(){
         $tin=Vehicle::find(1);
         $tin->name="minibus";
          $tin->save();
                    
                }
                function deletevehicle(){
                    vehicle::find(6)->delete();
                }
        }


