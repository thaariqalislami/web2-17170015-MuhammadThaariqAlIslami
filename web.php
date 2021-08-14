<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function(){
    return "Hello Antar Bangsa";
});

use App\Http\Controllers\ProduckController;
Route::get('/product/display',[ProduckController::class,'showAll']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-page', function() {
    return 'Halaman Untuk Admin';
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return 'Halaman Untuk User';
})->middleware('role:user')->name('user.page');

Route::view('/welcome', 'welcome');

Route::resource('/user', 'userController');

Route::get('/user/destroy/{id}','userController@destroy');


