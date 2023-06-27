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
Route::get("/homepage", function() {
    return "<h1>This is home page</h1>";
   });
   
Route::get("/blog/{id}", function($id) {
    return "<h1>This is blog page : {$id} </h1>" ;
});
Route::get("/hello", function () {	
    return view("hello");
    });


// routes/web.php 
Route::get('/greeting', function () {

	$name = 'tom';
$last_name = 'kuy';

return view('greeting', compact('name','last_name') );
});
   