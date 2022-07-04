<?php
use App\Http\Controllers\FirstController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TreeController;


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/nepal',[FirstController::class,"nepal"]);
Route::get('/add',[DoctorController::class,"add"]);
    Route::get("/view",[DoctorController::class,"viewDoctor"]);
    
    Route::get("/update",[DoctorController::class,"updateDoctor"]);
    Route::get("/delete",[DoctorController::class,"deleteDoctor"]);
Route::get('/insert',[PatientController::class,"insert"]);
    Route::get("/view1",[PatientController::class,"viewPatient"]);
   
    Route::get("/update1",[PatientController::class,"updatePatient"]);
    Route::get("/delete1",[PatientController::class,"deletePatient"]);

Route::get("/bus",[VehicleController::class,"bus"]);
Route::get("/truck",[VehicleController::class,"truck"]);
Route::get("/car",[VehicleController::class,"car"]);
  
    // Route::get("/view",[VehicleController::class,"viewVehicle"]);
    // Route::get("/insert",[VehicleController::class,"insertVehicle"]);
    // Route::get("/update",[VehicleController::class,"updateVehicle"]);
    // Route::get("/delete",[VehicleController::class,"deleteVehicle"]);
