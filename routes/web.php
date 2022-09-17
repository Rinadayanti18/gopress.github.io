<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Ini mau buat error page not found, hanya belum berhasil:
// Route::get('/404', function(){
//     return view ("errors/404",[
//         "title" => "404"
//     ]);
// });

// Route::get('/error/404', 'ErrorController@notfound404')->name('notfound404');

// Route::get('/error/404', [App\Http\Controllers\ErrorController::class, 'notfound404']);

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');  

Route::post('/signin', [LoginController::class, 'authenticate']);  

Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');  

Route::post('/signup', [RegisterController::class, 'store']);  

Route::get('/profil',[HomeController::class,'profil'])->middleware('auth');

Route::get('/profil/{{auth()->user()->username}}',[HomeController::class,'edit'])->middleware('auth');
// Route::prefix('profil') -> group(function () {
    
// });

Route::middleware(['auth','is_admin']) -> group(function(){
    Route::resource('dashboard', HomeController::class);
});

