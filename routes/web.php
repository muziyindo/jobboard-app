<?php

use App\Http\Controllers\PagesController;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\JobController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[JobController::class, 'index'])->name('index');
Route::get('/site/about',[JobController::class, 'about'])->name('about');
Route::get('/site/signup',[JobController::class, 'signup'])->name('signup');
Route::get('/site/login',[JobController::class, 'login'])->name('login');
Route::get('/job/jobs',[JobController::class, 'jobs'])->name('jobs');
Route::get('/job/job/{id}',[JobController::class, 'jobDetails'])->name('job');

Route::get('/job/createJob',[JobController::class,'createJob'])->name('createJob');
Route::post('/job/storeJob',[JobController::class,'storeJob'])->name('storeJob');
Route::get('/job/editJob/{id}',[JobController::class,'editJob'])->name('editJob');
Route::put('/job/updateJob/{id}',[JobController::class,'updateJob'])->name('updateJob');
Route::delete('/job/deleteJob/{id}',[JobController::class,'deleteJob'])->name('deleteJob');



// Route::get('/',function(){
// return view('home_');

// });


//laravel 8 (New)
/*Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);
Route::get('/products/{name}',[ProductsController::class,'show']);
*/

/*//laravel 8 (Also New)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');*/

//allows only integer
/*Route::get('/allowinteger/{id}',function($id){
    return $id ;
})->where('id','[0-9]+');
*/

//allows only strings
/*Route::get('/allowstring/{name}',function($name){
    return $name ;
})->where('name','[a-zA-Z]+');
*/

//passing multiple value and restrict value type
/*
Route::get('/allowmultiple/{name}/{id}',function($name,$id){
    return $name.' '.$id ;
})->where([
    'name'=>'[a-zA-Z]+',
    'id'=>'[0-9]+'
]);
*/


//named routes
//Route::get('/books', [ProductsController::class,'showBooks'])->name('books');

//Route::get('/home',[PagesController::class,'home']);



/*
//Before Laravel 8 - Won't work on laravel 8
Route::get('/products', 'ProductsConroller@index');
*/

//Return Array
 /*Route::get('/rarray',function(){
     return ['Ayinde','Jamal','Afeez'];
 });
 */


//Return JSON
 /*Route::get('/rjson',function(){
    return response()->json([
        'Name'=>'Mueez',
        'Course'=>'Java'
    ]);
 });
*/