<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\JobPost;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/jobs',function(){
	$jobs = JobPost::all();
	return response()->json($jobs, 200) ;
});

Route::get('/jobs/{id}',function($id){
	$jobDetails = JobPost::where("id","=",$id)->get(); 
	return response()->json($jobDetails, 200) ;
	//return response(JobPost::find($id), 200);
	
	
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
