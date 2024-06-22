<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Students@index');
Route::post('/home','Student@insert');
// Route::get('/myview','Students@show');
Route::get('/myview',[Students::class,'show']);

Route::post('/insert','Students@insert');