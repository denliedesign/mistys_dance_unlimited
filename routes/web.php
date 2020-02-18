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

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('birthday', function () {
    return view('birthday');
});

Route::get('pl', function () {
    return view('pl');
});

Route::get('bravo', function () {
    return view('bravo');
});

Route::get('studio', function () {
    return view('studio');
});

Route::get('employment', function () {
    return view('employment');
});

Route::get('littles', function () {
    return view('littles');
});

Route::get('big-kids', function () {
    return view('big-kids');
});

Route::get('adults', function () {
    return view('adults');
});

Route::get('2-4yr', function () {
    return view('2-4yr');
});

Route::get('k-1st', function () {
    return view('k-1st');
});

Route::get('2nd-3rd', function () {
    return view('2nd-3rd');
});

Route::get('level1-2', function () {
    return view('level1-2');
});

Route::get('level3-4', function () {
    return view('level3-4');
});

Route::get('level5-7', function () {
    return view('level5-7');
});

Route::get('recreational', function () {
    return view('recreational');
});

Route::get('pc', function () {
    return view('pc');
});

Route::get('prepro', function () {
    return view('prepro');
});

Route::get('guys', function () {
    return view('guys');
});

Route::get('costume', function () {
    return view('costume');
});

Route::get('costume2', function () {
    return view('costume2');
});

Route::get('costume3', function () {
    return view('costume3');
});

Route::get('/recitals', function () {
    return view('recitals.index');
});

Route::get('pre-pro', function () {
    return view('pre-pro');
});

Route::get('trial', 'FreeTrialController@create')->name('trial.create');
Route::post('trial', 'FreeTrialController@store')->name('trial.store');

Route::resource('events', 'EventController');
Route::resource('promotions', 'PromotionController');
Route::resource('articles', 'ArticleController');
Route::resource('posts', 'PostController');
Route::resource('recitals/generals', 'GeneralController');
Route::resource('recitals/ads', 'AdController');
Route::resource('recitals/handbooks', 'HandbookController');
Route::resource('recitals/memories', 'MemoryController');
Route::resource('recitals/performances', 'PerformanceController');
Route::resource('recitals/rehearsals', 'RehearsalController');
Route::resource('recitals/seniors', 'SeniorController');
Route::resource('recitals/tickets', 'TicketController');
Route::resource('recitals/photos', 'PhotoController');
Route::resource('recitals/volunteers', 'VolunteerController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
