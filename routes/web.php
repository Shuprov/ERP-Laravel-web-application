<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\shopsController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\signinController;
use Illuminate\Validation\Validator;
use App\Http\Controllers\LoginController;

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
    echo "Create a fine website for mid";
    //return view('welcome');
});


 Route::get('/loginsystem', ['uses'=> 'HomeController@index' ]);
 //Route::get('/login', [LoginController::class,'index' ]); laravel 8 
Route::post('/loginsystem', 'HomeController@verify');

/*changing*/

Route::get('/signin', ['uses'=> 'signinController@index1' ]);//view signin paged
//Route::post('/signin', ['uses'=> 'signinController@verify4' ])
//Route::post('/signin','signinController@verify4');

//Route::post('/signin', ['uses'=> 'signinController@verify1' ]);//redirect to login page and input 
//Route::post('/signin', 'signinController@verify1'); 
Route::post('/signin', ['uses'=> 'signinController@registration' ]); //validation
Route::post('/signin','signinController@submit');

/*
Route::get('/register', function(){
    echo "this is signup page for now";
});*/

Route::get('/AccountantPage', ['uses' => 'HomeController@webpage']);
Route::post('/AccountantPage', 'HomeController@check'); 

//Route::get('/Home', ['uses' => 'HomeController@Homepage']);

//Route::get('/logout', ['uses' => 'LogoutController@logout']);
//Route::get('/loginsystem', ['uses' => 'HomeController@loginsystem']);

Route::get('/logout','LogoutController@index2');
Route::get('/Home','HomeController@ahad');





Route::get('/Accountspayables', ['uses' => 'PaymentrecordController@Accountspayables']);
Route::get('/Accountspayable', ['uses' => 'PaymentrecordController@Accountspayable']);
Route::get(' payable', ['uses' => 'PaymentrecordController@Paymentrecord']);
Route::post('/Accountspayable','PaymentrecordController@submit2');
Route::get('/edit/{id}','PaymentrecordController@edit');
Route::post('/edit/{id}','PaymentrecordController@update');
Route::get('/delete/{id}', 'PaymentrecordController@delete')->name("delete");


Route::get('/Accountsreceivables', ['uses' => 'PaymentrecordController@Accountsreceivables']);
Route::get('/Accountsreceivable', ['uses' => 'PaymentrecordController@Accountsreceivable']);
Route::get(' receivable', ['uses' => 'PaymentrecordController@Paymentrecord2']);
Route::post('/Accountsreceivable','PaymentrecordController@submit3');
Route::get('/edit1/{id}','PaymentrecordController@edit1');
Route::post('/edit1/{id}','PaymentrecordController@update1');
Route::get('/delete1/{id}', 'PaymentrecordController@delete1')->name("delete1");
//Route::post('/Accountsreceivable','PaymentrecordController@val');



Route::get('/Connectwithadmin', ['uses' => 'ConnectAdminController@Connectwithadmin']);
Route::get(' Messagetoadmin', ['uses' => 'ConnectAdminController@contact']);
Route::post('/Connectwithadmin','ConnectAdminController@submit4');
Route::get('/edit2/{id}','ConnectAdminController@edit2');
Route::post('/edit2/{id}','ConnectAdminController@update2');
Route::get('/delete2/{id}', 'ConnectAdminController@delete2')->name("delete2");




Route::get('/Timeandexpence', ['uses' => 'TimeaddController@Timeandexpence']);
Route::get('/Timemanagement', ['uses' => 'TimeaddController@Timemanagement']);
Route::get(' Timeadd', ['uses' => 'TimeaddController@Timemanage']);
Route::post('/Timemanagement','TimeaddController@submit5');
Route::get('/edit3/{id}','TimeaddController@edit3');
Route::post('/edit3/{id}','TimeaddController@update3');
Route::get('/delete3/{id}', 'TimeaddController@delete3')->name("delete3");




Route::get('/Profitloss', ['uses' => 'profitlossController@Profitloss']);
Route::get('/profitlossinput', ['uses' => 'profitlossController@profitlossinput']);
Route::get(' profitlosslist', ['uses' => 'profitlossController@profitlosslist']);
Route::post('/profitlossinput','profitlossController@submit6');
Route::get('/edit4/{id}','profitlossController@edit4');
Route::post('/edit4/{id}','profitlossController@update4');
Route::get('/delete4/{id}', 'profitlossController@delete4')->name("delete4");





Route::get('/Projectadd', ['uses' => 'projectsController@Projectadd']);
Route::get('/projectsadd', ['uses' => 'projectsController@projectsadd']);
Route::get(' projectslist', ['uses' => 'projectsController@projectslist']);
Route::post('/projectsadd','projectsController@submit7');
Route::get('/edit5/{id}','projectsController@edit5');
Route::post('/edit5/{id}','projectsController@update5');
Route::get('/delete5/{id}', 'projectsController@delete5')->name("delete5");




Route::get('/Summary', ['uses' => 'HomeController@Summary']);



Route::get('/Financialaccounting', ['uses' => 'HomeController@Financialaccounting']);

Route::get('/Financialclose', ['uses' => 'HomeController@Financialclose']);


Route::get('/Managementaccounting', ['uses' => 'ManagementController@Managementaccounting']);
Route::post('/Managementaccounting','ManagementController@submituser');





Route::get('/Accountant1', ['uses' => 'Accountant1Controller@webpage1']);

Route::get('/Datamanagement', ['uses' => 'HomeController@Datamanagement']);

Route::get('/Taxaccounting', ['uses' => 'HomeController@Taxaccounting']);

Route::get('/Manageinventory', ['uses' => 'HomeController@Manageinventory']);

Route::get('/Revenuemanagement', ['uses' => 'HomeController@Revenuemanagement']);

Route::get('/Projects', ['uses' => 'HomeController@Projects']);



Route::get('/Projectedit', ['uses' => 'HomeController@Projectedit']);

Route::get('/Projectdetail', ['uses' => 'HomeController@Projectdetail']);



Route::get('/login', ['uses' => 'LoginController@login']);
Route::post('/login', ['uses' => 'LoginController@log']);
//Route::post('/login', ['uses' => 'LoginController@login']);








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

