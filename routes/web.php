<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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
    return view("homeFolder/home", [
        "title" => "Home"
    ]);

});

Route::get('/company', function () {
    return view("aboutUsFolder/company",[
        "title" => "Company"
    ]);
});

Route::get('/dangerous', function () {
    return view("aboutUsFolder/dangerous",[
        "title" => "Dangerous Goods"
    ]);
});

Route::get('/event', function () {
    return view("aboutUsFolder/event",[
        "title" => "Event"
    ]);
});

Route::get('/news', function () {
    return view("aboutUsFolder/news", [
        "title" => "News"
    ]);
});

Route::get('/packaging', function () {
    return view("aboutUsFolder/packaging", [
        "title" => "Packaging"
    ]);
});

Route::get('/prohibited', function () {
    return view("aboutUsFolder/prohibited", [
        "title" => "Prohibited Goods"
    ]);
});

Route::get('/topEmployee', function () {
    return view("aboutUsFolder/topEmployee", [
        "title" => "Top Employee"
    ]);
});

Route::get('/FAQ', function () {
    return view("aboutUsFolder/FAQ", [
        "title" => "FAQ"
    ]);
});

Route::get('/service', function () {
    return view("serviceFolder/service", [
        "title" => "Services"
    ]);
});


Route::get('/rates', function () {
    return view("trackFolder/rates", [
        "title" => "Rates"
    ]);
    
});

Route::get('/trace', function () {
    return view("trackFolder/trace", [
        "title" => "Trace"
    ]);
});

Route::get('/location', function () {
    return view("trackFolder/location", [
        "title" => "Location"
    ]);
});

Route::get('/order', function () {
    return view("orderFolder/order", [
        "title" => "Order"
    ]);
});

Route::get('/signin', [LoginController::class, 'index']);  

Route::post('/signin', [LoginController::class, 'authenticate']);  

Route::get('/signup', [RegisterController::class, 'index']);  

Route::post('/signup', [RegisterController::class, 'store']);  


