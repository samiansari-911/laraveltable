<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/about/{id}/{name?}',function (int $id, string $name= null){
//     return view('about')->with(['id' => $id, 'name' =>$name]);
// });
Route::get('/',[StudentController::class,'index']);
Route::get('/about',[StudentController::class,'about']);
Route::get('/register',[StudentController::class,'register']);
Route::post('/register',[StudentController::class,'create']);
