<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
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
    //return view('welcome');
    return view("login");
});


Route::get('/customlogout', function () {
    //return view('welcome');
    Session::forget('user');
    return redirect("/");
});





Route::post("/customlogin",[userController::class, 'login']);
Route::get("/product",[productController::class, 'index']);
Route::get("/details/{id}",[productController::class, 'details']);
Route::post("/add-to-cart",[productController::class, 'addToCart']);
Route::get("/cartlist",[productController::class, 'cartList']);
Route::get("/removecart/{id}",[productController::class, 'removeCart']);
Route::get("/ordernow",[productController::class, 'orderNow']);
Route::post("/orderplace",[productController::class, 'orderPlace']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
