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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//controller for mailables
route::get('/email', 'emailController@index');
route::post('/sendemail/send', 'emailController@send');



//logic for middleware
Route::group(['middleware' => ['web','auth']], function(){

Route::get('/home', function(){
if (Auth::user()->admin==0){
	return view('home');
}
elseif (Auth::user()->admin==2) {
	return view('adminUsers.syanAdmin');}
else{
	$users ['users'] = \App\User::all();
	return view('adminUsers.systemAdmin.systemAdmin', $users);
}
});
});
//the end


Route::get('/test', 'HomeController@test');

Route::get('/add', 'adminController@add');
Route::Post('/addRes', 'adminController@store')->name('addRes');



//syanko-katthi-Rolls
/*
Route::get('test',function(){
	return App\syanMenu::with('childs')
	->where('cat_id',)
	->get();
});
*/

Route::get('sayanHome', ['uses' => 'restaurantController@sayanHome', 'as' => 'sayanHome']);
Route::get('sayanDas', ['uses' => 'adminController@syanDas', 'as' => 'horder']);

Route::post('/syanAdmin', 'adminController@syanDas');
Route::get('/syanAdmin', 'adminController@syanDas');
Route::get('/sayankoRolls', 'restaurantController@sayanHome');
Route::get('/syankoMenu', 'restaurantController@syanMenu');
//syanKO CRUD
Route::post('/addMenu', 'restaurantController@storeMenu');
Route::post('/deleteMenu', 'restaurantController@deleteMenu');
Route::get('/updateMenu', 'restaurantController@editMenu');
Route::post('/myOrder', 'restaurantController@order');
Route::get('/editSyan' ,'restaurantController@editSyan');
Route::Post('/syanOrder' ,'restaurantController@syanOrder');
route::resource('restaurant','restaurantController');







