<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;   //use class
use App\Http\Controllers\Adminscontroller;   //use class
use App\Http\Controllers\Adminfx;   //use class  //use class
use App\Http\Controllers\selectAdmin;   //use class
use App\Http\Controllers\selectallAdmin;   //use class
use App\Http\Controllers\updateAdmin;     //use class
use App\Http\Controllers\DeleteAdmin;     //use class
// use App\Http\Controllers\fx;
use App\Http\Controllers\CustomAuthController;
 
Route::get('/', [App\Http\Controllers\layoutfx::class,'index'])->name('index');     // INDEX.BLADE

Auth::routes();

Route::view('/nav', 'link' ,[    //output  in   category in resources / aboutus
  'title' => 'website_name',
   'description' => 'description_info'
   ])->name('u.dashboard');





