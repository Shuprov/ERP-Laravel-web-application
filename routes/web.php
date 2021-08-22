<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\shopsController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
//Route::get('/home', ['uses'=>'indexController@index']);
Route::get('/home', [indexController::class, 'index']);
Route::get('/login', [UserController::class, 'log']);
Route::post('/login', [UserController::class, 'loginVerify'])->name('loginVerify');
Route::get('/dashboard', [dashboardController::class, 'dash']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/shop', [shopsController::class, 'shop']);
Route::get('/register', [UserController::class, 'reg']);
// Route :: post ('/register', [UserController::class, 'verify']);
Route::post('/register', [UserController::class, 'store'])->name('store');
Route::get('/contact', [contactController::class, 'contact']);


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
//  Route::post('/create','UserController@verify');


 Route::get('/edit/{id}','UserController@edit');
 Route::post('/edit/{id}','UserController@update');

//  Route::get('/delete/{id}','UserController@delete');
//  Route::post('/delete/{id}','UserController@destroy');

 //Route::get('/create','UserController@submit');
 Route::post('/create','UserController@submit');

 Route::get('/delete/{id}', 'UserController@user_delete')->name("user_delete");

 //product controller
 Route::get('/productlist','ProductController@index');
 Route::get('/products/create','ProductController@create');
 Route::post('/products/create','ProductController@verify');
 Route::post('/products/create','ProductController@submit');
 Route::get('/products/edit/{id}','ProductController@edit');
 Route::post('/products/edit/{id}','ProductController@update');
 Route::get('/products/delete/{id}', 'ProductController@delete')->name("delete");

 //brand controller
 Route::get('/brandlist','BrandController@index');
 Route::get('/brands/create','BrandController@create');
 Route::post('/brands/create','BrandController@verify');
 Route::post('/brands/create','BrandController@submit');
 Route::get('/brands/edit/{id}','BrandController@edit');
 Route::post('/brands/edit/{id}','BrandController@update');
 Route::get('/brands/delete/{id}', 'BrandController@delete')->name("delete");

 //category controller

 Route::get('/categorylist','CategoryController@index');
 Route::get('/categories/create','CategoryController@create');
 Route::post('/categories/create','CategoryController@verify');
 Route::post('/categories/create','CategoryController@submit');
 Route::get('/categories/edit/{id}','CategoryController@edit');
 Route::post('/categories/edit/{id}','CategoryController@update');
 Route::get('/categories/delete/{id}', 'CategoryController@delete')->name("delete");

 //company controller
 Route::get('/companylist','CompanyController@index');
 Route::get('/companies/create','CompanyController@create');
 Route::post('/companies/create','CompanyController@verify');
 Route::post('/companies/create','CompanyController@submit');
 Route::get('/companies/edit/{id}','CompanyController@edit');
 Route::post('/companies/edit/{id}','CompanyController@update');
 Route::get('/companies/delete/{id}', 'CompanyController@delete')->name("delete");


 //store controller
 Route::get('/storelist','StoreController@index');
 Route::get('/stores/create','StoreController@create');
 Route::post('/stores/create','StoreController@verify');
 Route::post('/stores/create','StoreController@submit');
 Route::get('/stores/edit/{id}','StoreController@edit');
 Route::post('/stores/edit/{id}','StoreController@update');
 Route::get('/stores/delete/{id}', 'StoreController@delete')->name("delete");
 





Route::post('/contact', [contactController::class, 'message'])->name('message2');
Route::post('/dashboard', [shopsController::class, 'review'])->name('review');
Route::post('/cont', [shopsController::class, 'refand'])->name('refand');
Route::get('/campaigns', [ShopsController::class, 'camp']);
Route::get('/cart', [ShopsController::class, 'cart']);
Route::get('/checkout', [ShopsController::class, 'check']);
Route::get('/product', [productController::class, 'products']);
//product list..
 Route::get('/dashboard', [dashboardController::class, 'productslist'])->name('productlist');
Route::get('/product_details/{id}', [productController::class, 'productdet'])->name('product_details');

Route::get("add_to_cart/{id}/{title}/{price}",[CartController::class, 'add'])->name("add_to_cart");
Route::get('/cart_item_delete/{id}', [CartController::class, 'cart_item_delete'])->name("cart_item_delete");
// Route::get('/checkout', function () {
//     return view('checkout');
// });
