<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function (){
    return view('homepage');
});

Route::get('login', function (){
    return view('login');
});

Route::get('registration', function (){
    return view('registration');
});

Route::get('customer-dashboard', function(){
    return view('customer/customer-dashboard');
});

Route::get('admin-dashboard', function(){
    return view('admin/admin-dashboard');
});

Route::get('extra', function(){
    return view('extra');
});
