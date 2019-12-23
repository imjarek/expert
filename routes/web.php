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
Route::get('/main', 'Controller@mainPage');

Route::get('/news', function () {
    return view('pages/news');
});

Route::get('/news/{id}', function () {
    return view('pages/new');
});

Route::get('image-upload', 'Controller@imageUpload');
Route::post('image-upload', 'Controller@imageUploadPost');

Route::get('pages/{page}', 'PageController@show');

Route::prefix('panel')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('panel.main');
    });

    Route::get('students', 'UsersController@getStudents');
    Route::get('admins', 'UsersController@getAdmins');

    Route::get('user/create', 'UsersController@create');
    Route::get('user/{userId}', 'UsersController@edit');
    Route::post('user', 'UsersController@store');
    Route::put('user/{userId}', 'UsersController@update');
    Route::delete('user/{userId}', 'UsersController@delete');

    Route::get('/courses/delete/{course}', function (\App\Course $course) {
        return view('panel.forms.course_delete', ['course' => $course]);
    });

    Route::prefix('pages')->group(function (){
        Route::get('/', 'PageController@index');
        Route::get('create', 'PageController@create');
        Route::get('edit/{page}', 'PageController@edit');
        Route::post('{page}', 'PageController@store');
    });

    Route::resource('material', 'MaterialsController');
    Route::resource('courses', 'PanelCoursesController');

    Route::post('file/upload', 'FileUploadController@upload');
    Route::post('file/remove', 'FileUploadController@remove');
});

Route::get('panel/login', array('uses' => 'Auth\LoginController@showLogin'))->name('login');;
Route::get('panel/logout', array('uses' => 'Auth\LoginController@doLogout'));
Route::post('panel/login', array('uses' => 'Auth\LoginController@doLogin'));

Route::resource('courses', 'CoursesController');

Route::prefix('order')->group(function (){
    Route::get('create', 'OrderController@edit');
    Route::get('success/{guid}', 'OrderController@success');
    Route::post('create', 'OrderController@store');
});

Route::prefix('cart')->group(function (){
    Route::get('/', 'CartController@show');
    Route::post('add', 'CartController@add');
});

Route::prefix('class_room')
    ->middleware('auth')
    ->group(function (){
        Route::get('/', 'ClassRoomController@showClassroom');
        Route::get('/course/{id}', 'ClassRoomController@showCourse');
});

Route::post('enroll', 'UsersController@enroll');
Route::get('test', 'TestController@test');
