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


Route::get('/personal', function () {
    return view('personal');
})->middleware(['auth','checkuser:ericanandan1@gmail.com']);

Route::get('/view', function () {
    return view('view');
})->middleware(['auth','checkname:Eric Anandan']);

Route::get('/','App\Http\Controllers\movie_controller@table_info1');

Route::middleware(['auth','checkip'])->group(function () {

    Route::get('/view', function () {
        return view('view');
    });

    Route::get('/edit', function () {
        return view('edit');
    });

    Route::get('/page2', function () {
        return view('booking');
    });
    

    Route::get('/view','App\Http\Controllers\movie_controller@table_info2');
    Route::post('/page2/checkout','App\Http\Controllers\movie_controller@checkout');
    Route::post('/personal/{{$data->id}}/update','App\Http\Controllers\movie_controller@updated');
    Route::get('/personal','App\Http\Controllers\movie_controller@table_info3');
    Route::get('/edit/{id}','App\Http\Controllers\movie_controller@edit');
    Route::get('/view/{ticket_ID}','App\Http\Controllers\movie_controller@delete');
    Route::delete('/view/{id}','App\Http\Controllers\movie_controller@delete');

    /*-----------Filter <Routes---------------------->*/ 
    Route::get('/view/spiderman','App\Http\Controllers\movie_controller@spiderman');
    Route::get('/view/encanto','App\Http\Controllers\movie_controller@encanto');
    Route::get('/view/kings','App\Http\Controllers\movie_controller@kings');
    Route::get('/view/venom','App\Http\Controllers\movie_controller@venom');
    Route::get('/view/kungfu','App\Http\Controllers\movie_controller@kungfu');
    Route::get('/view/nightmare','App\Http\Controllers\movie_controller@nightmare');
    Route::get('/view/notime','App\Http\Controllers\movie_controller@notime');


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');
