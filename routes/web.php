<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[HomeController::class,'index']);
route::get('/add_data',[HomeController::class,'add_data']);
route::get('/view_data',[HomeController::class,'view_data']);
route::get('/edit_data/{id}',[HomeController::class,'edit_data']);
route::post('/upload_data',[HomeController::class,'upload_data']);
route::post('/update_details/{id}',[HomeController::class,'update_details']);
route::get('/delete/{id}',[HomeController::class,'delete']);
