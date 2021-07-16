<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\signinController;
use Illuminate\Validation\Validator;
use App\Http\Controllers\LoginController;
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







