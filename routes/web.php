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


Route::get('pages/{page}', 'PageController@show');

Route::prefix('panel')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('panel.main');
    });
    Route::prefix('pages')->group(function (){
        Route::get('/', 'PageController@index');
        Route::get('create', 'PageController@create');
        Route::get('edit/{page}', 'PageController@edit');
        Route::post('{page}', 'PageController@store');
    });

    Route::resource('courses', 'PanelCoursesController');
});

Route::get('panel/login', array('uses' => 'Auth\LoginController@showLogin'))->name('login');;
Route::get('panel/logout', array('uses' => 'Auth\LoginController@doLogout'));
Route::post('panel/login', array('uses' => 'Auth\LoginController@doLogin'));

Route::resource('courses', 'CoursesController');

Route::resource('order', 'OrderController');

Route::post('/enroll', 'UsersController@enroll');


