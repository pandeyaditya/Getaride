<?php

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

// /* Expenses Routes */
// Route::get('/', function () {
//     $categories = \App\Category::all();
//     return view('addexpense')->with('categories',$categories);
// });

// Route::get('/addexpense', function () {
//     $categories = \App\Category::all();
//     return view('addexpense')->with('categories',$categories);
// });

// Route::post('/expense/add','ExpenseController@add');
// Route::get('/allexpenses','ExpenseController@allexpenses');



// /* Categories Routes */

// Route::get('/addcategory', function () {
//     return view('addcategory');
// });

// Route::post('/category/add','CategoryController@add');

// Route::get('/allcategories', 'CategoryController@allcategories');



// Get Ride Routes

Route::get('/',function(){
	return view('showindex');
});

Route::get('/addtour',function(){
	return view('addtour');
});

Route::get('/addcar',function(){
	return view('addcar');
});

Route::get('/allcars','CarController@allcars');
Route::post('/savecar','CarController@save');




// Routes to add a new trip
Route::get('/addtrip',function(){
	return view('addtrip');
});

Route::get('/alltrips','TripController@alltrips');
Route::post('/savetrip','TripController@save');

