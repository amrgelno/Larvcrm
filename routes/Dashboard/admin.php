<?php

use App\Http\Controllers\Auth\Dashboard;
use App\Http\Controllers\client_crud;
use App\Http\Controllers\projects_crud;
use App\Http\Controllers\user_crud;

Route::group(['middleware'=>'checkdata' ], function () {
   //dashboard middleware

Route::POST('/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('Dashboard');  // auth library
});

Route::resource('admin/Dashboard/client',client_crud::class);
Route::resource('admin/Dashboard/projects',projects_crud::class);
Route::resource('Dashboard/user',user_crud::class);



