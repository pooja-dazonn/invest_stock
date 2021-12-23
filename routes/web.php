<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\IndexController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('user/home');
});
Route::get('header', [IndexController::class, 'header']);

Route::get('footer', [IndexController::class, 'footer']);

Route::get('home', [IndexController::class, 'home']);

Route::get('marketlead', [IndexController::class, 'marketlead']);
Route::post('marketlead', [IndexController::class, 'leads'])->name('marketlead');

Route::get('stockmove', [IndexController::class, 'stockmove']);
Route::post('stockmove', [IndexController::class, 'stocks'])->name('stockmove');

Route::get('portfolio', [IndexController::class, 'portfolio']);
Route::post('portfolio', [IndexController::class, 'portfolios'])->name('portfolio');

Route::get('performance', [IndexController::class, 'performance']);

Route::get('portfoliopayment', [IndexController::class, 'portfoliopayment']);
Route::get('equity', [IndexController::class, 'equity']);

Route::get('login',[AuthController::class,'login']);
Route::post('login',  [AuthController::class, 'postLogin'])->name('login'); 
Route::get('Registration',[AuthController::class,'Registration']);
Route::post('postRegistration',[AuthController::class, 'postRegistration']); 
Route::get('logout',  [AuthController::class, 'logout']);
Route::get('userleads',  [AuthController::class, 'userleads']);


/*Admin*/
Route::get('adminindex', [AdminController::class, 'adminindex']);

Route::get('sidebar', [AdminController::class, 'sidebar']);

Route::get('leads', [AdminController::class, 'leads']);
Route::post('leads.actions  ',[AdminController::class,'action'])->name('leads.actions');


Route::get('adminstock', [AdminController::class, 'adminstock']);
Route::post('adminstock', [AdminController::class, 'addstock']);

Route::get('tabledit', [AdminController::class, 'stockdata']);
Route::post('tabledit/action',[AdminController::class,'action'])->name('tabledit.action');
Route::post('/tabledit',[AdminController::class,'searchBydate'])->name('tabledit');

Route::get('adminlogin', [AdminController::class, 'adminlogin']);
Route::post('/adminindex', [AdminController::class, 'loginuser'])->name('adminindex');

Route::get('adminregister', [AdminController::class, 'adminregister']);
Route::post('/register-user', [AdminController::class, 'registeruser'])->name('register-user'); 


Route::get('user', [AdminController::class,'user']);

Route::get('/download-file', [AdminController::class,'download_file']);
Route::get('payWithRazorpay', [RazorpayController::class,'payWithRazorpay'])->name('payWithRazorpay');
Route::post('portfoliopayment', [RazorpayController::class,'portfoliopayment'])->name('portfoliopayment');