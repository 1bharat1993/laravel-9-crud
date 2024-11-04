<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;

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
use App\Http\Controllers\StudentController;
Route::resource('students', StudentController::class); 


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/customer', function () {
   // return view('welcome');
   $customers=Customer::all();
   echo"<pre>";
   print_r($customers->toArray());
});
*/


Route::get('/hello', function () {
    return view('welcome');
});


use App\Http\Controllers\CustomerController;
Route::resource('hello2', CustomerController::class); 


Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store']);

Route::get('/customer/view',[CustomerController::class,'view']);


Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');



