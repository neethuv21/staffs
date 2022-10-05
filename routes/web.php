<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staffController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index',[staffController::class,'index']);
Route::get('/staff1',[staffController::class,'staff1']);
Route::post('/loginactions1',[staffController::class,'loginactions1']);
Route::get('/staff2',[staffController::class,'staff2']);
Route::post('/loginactions2',[staffController::class,'loginactions2']);
Route::get('/adminlogin',[staffController::class,'adminlogin']);
Route::post('/adminloginaction',[staffController::class,'adminloginaction']);

Route::get('/adddetails',[staffController::class,'adddetails']);
Route::post('/register',[staffController::class,'register']);
Route::get('/adddetailss',[staffController::class,'adddetailss']);
Route::post('/registers',[staffController::class,'registers']);
Route::get('/logout',[staffController::class,'logout']);
Route::get('/readdetails',[staffController::class,'readdetails']);
Route::get('/adminview',[staffController::class,'adminview']);
