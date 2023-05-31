<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome', ['name' => 'Mona', 'collage' => 'CS']);


// Route::get('newWelcome', function(){
//     return view('student.welcome');
// });

// Route::view('newWelcome', 'student.welcome');


// Route::redirect('google', 'https://www.google.com');

// Route::redirect('/', 'newWelcome');


// Required Route parameter
Route::get('user/{id}', function($id){
    return 'Parameter Value is: ' . $id;
});

// Optional Route parameter
Route::get('user/{id?}', function($id = 'NO ID'){
    return 'User id: ' . $id;
});

// Route::view('user', 'student.welcome')->name('user.details');


// Route::prefix('admin')->group(function () {
    
//     Route::get('/home','welcome');
//     Route::get('/profile','');
//     Route::get('/reset', '');
// });