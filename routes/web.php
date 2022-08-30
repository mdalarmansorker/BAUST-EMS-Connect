<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

 
Route::group(['middleware' => 'prevent-back-history'],function(){     //Start of preventBackHistory middleware
	
/* Universal Login */
Route::get('/',[MemberController::class,'index']);

/* Register routers */

// temp registration of register
Route::get('/viewregister',[MemberController::class,'viewregister']);
Route::post('/register',[MemberController::class,'register']);

//  viewing registration dashboard
Route::get('/view-register-dashboard',[MemberController::class,'login']);
// Dashboard
Route::post('/login',[MemberController::class,'login']);
Route::get('/dashboard',[MemberController::class,'dashboard']);

// Add employees from register
Route::post('/sendemployeedata',[RegisterController::class,'addEmployees']);


// Add new employees 
Route::get('/addemployees',[RegisterController::class,'viewaddEmployees']);
Route::post('/sendemployeedata',[RegisterController::class,'addEmployees']);

// Logout
Route::post('/logout',[RegisterController::class,'logout']);

});  //end of preventBackHistory middleware 