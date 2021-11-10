<?php

use Illuminate\Support\Facades\Route;

//call the controller
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;


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


$post = [
    1 => [
        'title' => 'learn laravel 8 ',

    ],
    2 => [
        'title' => 'learn laravel 8'
    ]
];

Route::get('/test/response', function() use($post){
    return response($post, 201)
        ->header('content-type', 'application/json')
        ->cookie('MY_COOKIE', 'TEST', 3600);
});


//grouping routes
Route::prefix('/test')->name('test.')->group(function() use($post){
    Route::get('/jsontest', function() use($post){
        return response()->json($post);
    })->name('jsontest');
    
    Route::get('/download', function() use($post){
        return response()->download(public_path('/photo/aimer-night-world.png'));
    })->name('download');
});


//test middelware
Route::get('/testmiddleware', function(){
    return view('post.testmiddleware');
})->name('test Middleware')->middleware('auth');

//test controller
Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');

//single action controller
Route::get('/about', AboutController::class);

// CRUD Controller or Controller Resource
// php artisan make:controller PostController --resource
Route::resource('testposts', PostController::class)->only(['index', 'show']);


