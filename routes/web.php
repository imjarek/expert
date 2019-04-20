<?php

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

Route::get('/', function(){
    return redirect('main');
});
Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {

});

Route::prefix('panel')->group(function () {
    Route::get('/', function () {
        return view('panel.main');
    });
    Route::resource('courses', 'PanelCoursesController');
});

Route::resource('courses', 'CoursesController');

Route::resource('order', 'OrderController');

Route::get('schedule', function () {
    return view('schedule');
});

Route::post('/enroll', 'UsersController@enroll');
