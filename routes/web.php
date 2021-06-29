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
/*Route::get('/login',function()
{
    return view('login');
}); */
Route::get('/login' ,['uses' => 'LoginController@index']);
//Route::get('/login' , 'LoginController@index');

/*Route::post('/login',function()
{
    echo "posted";
}); */
Route::post('/login','LoginController@verify');

Route::get('/register','RegistrationController@index');
Route::post('/register','RegistrationController@verify');

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/logout','LogoutController@index');

Route::get('/user','UserController@index');
//Route::post('/user','UserController@index');
 Route::get('/create','UserController@create');
 Route::post('/create','UserController@verify');


 Route::get('/edit/{id}','UserController@edit');
 Route::post('/edit/{id}','UserController@update');

 Route::get('/delete/{id}','UserController@delete');
 Route::post('/delete/{id}','UserController@destroy');

 //Route::get('/create','UserController@submit');
 Route::post('/create','UserController@submit');

 Route::get('/delete/{id}', 'UserController@user_delete')->name("user_delete");





