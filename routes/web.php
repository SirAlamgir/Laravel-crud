<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/name/{name}/{class}' , function ($name , $class) {
    return "Student Name : " . $name . $class ;
} );    

// template integration
Route::get('/home', [Frontend::class , 'index']);
Route::get('/about', [Frontend::class , 'about']);
Route::get('/menu', [Frontend::class , 'menu']);

// CRUD
Route::get( '/student' , [studentController::class , 'index'] )->name('student.form');
Route::post( '/student/create' , [studentController::class , 'store'] )->name('student.store');