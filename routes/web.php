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
//  Route::get('/', function () {
//     return view('home');
//  });


Route::get('/index', function () {
     $fumetti=config('comics');
   
    return view('layouts.index', compact('fumetti'));
  
})->name('index');

Route::get('/show{id}', function ($id) {
   $fumetti=config('comics');
   if(is_numeric($id)) {
      $fumetto=$fumetti[$id];
      return view('layouts.show', compact('fumetto'));
   }else {
      abort(404);
   }
  

})->name('show');
