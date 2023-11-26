<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Models\Customer;


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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/hii',function(){
//     return view('hello');
// });

// Route::get('/demo', function () {
// echo "Hello World";
// });

// Route ::any('/test', function(){
//  echo "Hello World!!";
// });

// Route::put('/user', function(){
//     echo "Hello World";
// });

// Route::patch('/user', function(){
//     echo "Hello World";
// });

// Route::delete('/user', function(){
//     echo "Hello World";
// });

// Route::get('/{name?}',function($name = null){
//     $data=compact('name');
//     return view('home')->with($data);
// });

// Route::get('/',[DemoController::class,'index']);

// Route::get('/register',[RegistrationController::class,'index']);
// Route::post('/register',[RegistrationController::class,'register']);
// Route::get('/customer',function(){
//    $customer= Customer::all();
//    echo "<pre>";
//    print_r($customer->toArray());
// });


Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer',[CustomerController::class,'index']);

Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);

Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::get('/view', function () {
return view('index');
});


Route::get('/customers',[CustomersController::class,'create']);
//Route::get('/customers',[CustomersController::class,'index'])->name('customers.index');
Route::post('/customers',[CustomersController::class,'store']);
Route::get('customers/view',[CustomersController::class,'view']);
Route::post('customers/update/{id}',[CustomersController::class,'update'])->name('customers.update');
Route::get('customers/edit/{id}',[CustomersController::class,'edit'])->name('customers.edit');
Route::get('customers/delete/{id}',[CustomersController::class,'delete'])->name('customers.delete');   

Route::get('/upload',function(){
    return view('upload');
});

Route::post('/upload',[ImageController::class,'upload']);


Route::get('/student',[StudentController::class,'index']);
Route::post('/student',[StudentController::class,'upload']);