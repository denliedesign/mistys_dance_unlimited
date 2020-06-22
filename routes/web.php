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

Route::get('summer', function () {
    return view('summer');
});

Route::get('fall', function () {
    return view('fall');
});

Route::get('community', function () {
    return view('community.index');
});

Route::get('/community/fun-and-free-childrens-activities', function () {
    return view('community.fun-and-free-childrens-activities');
});

Route::get('/community/dance-at-home', function () {
    return view('community.dance-at-home');
});

Route::get('/community/dance-videos', function () {
    return view('community.dance-videos');
});

Route::get('/community/live-stream-dance-classes', function () {
    return view('community.live-stream-dance-classes');
});

Route::get('/community/family-events', function () {
    return view('community.family-events');
});

Route::get('/community/calendar', function () {
    return view('community.calendar');
});

Route::get('/community/live-events', function () {
    return view('community.live-events');
});

Route::get('/community/adult-classes', function () {
    return view('community.adult-classes');
});

Route::get('/community/community-partners', function () {
    return view('community.community-partners');
});

Route::get('/community/music-resources', function () {
    return view('community.music-resources');
});

Route::get('/covid-19/3-12-20', function () {
    return view('covid-19.3-12-20');
});

Route::get('/covid-19/3-13-20', function () {
    return view('covid-19.3-13-20');
});

Route::get('/covid-19/3-16-20', function () {
    return view('covid-19.3-16-20');
});

Route::get('/covid-19/3-20-20', function () {
    return view('covid-19.3-20-20');
});

Route::get('/covid-19/4-8-20', function () {
    return view('covid-19.4-8-20');
});

Route::get('/covid-19/4-15-20', function () {
    return view('covid-19.4-15-20');
});

Route::get('/covid-19/4-28-20', function () {
    return view('covid-19.4-28-20');
});

Route::get('/covid-19/5-15-20', function () {
    return view('covid-19.5-15-20');
});

Route::get('/covid-19/6-10-20', function () {
    return view('covid-19.6-10-20');
});

Route::get('/covid-19/6-17-20', function () {
    return view('covid-19.6-17-20');
});

Route::get('/covid-19/6-22-20', function () {
    return view('covid-19.6-22-20');
});

Route::get('/quiz', function () {
    return view('quiz.index');
});

Route::post('/quiz/test', function () {
    return view('quiz.test');
});

Route::post('/quiz/grade', function () {
    return view('quiz.grade');
});

Route::get('/quiz/grade', function () {
    return view('quiz.redirect');
});

Route::get('/quiz/denise', function () {
    return view('quiz.denise');
});

Route::get('/quiz/alex', function () {
    return view('quiz.alex');
});

Route::get('/quiz/beth', function () {
    return view('quiz.beth');
});

Route::get('/quiz/dennis', function () {
    return view('quiz.dennis');
});

Route::get('/quiz/keagan', function () {
    return view('quiz.keagan');
});

Route::get('/quiz/kris', function () {
    return view('quiz.kris');
});

Route::get('/quiz/krisa', function () {
    return view('quiz.krisa');
});

Route::get('/quiz/kylie', function () {
    return view('quiz.kylie');
});

Route::get('/quiz/larissa', function () {
    return view('quiz.larissa');
});

Route::get('/quiz/misty', function () {
    return view('quiz.misty');
});

Route::get('/quiz/sandy', function () {
    return view('quiz.sandy');
});

Route::get('/quiz/shayna', function () {
    return view('quiz.shayna');
});

Route::get('/quiz/tiffany', function () {
    return view('quiz.tiffany');
});

Route::get('frozen-friends', 'FrozenFriendsController@index')->name('frozen-friends');
Route::post('frozen-friends', 'FrozenFriendsController@store')->name('frozen-friends.store');

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
Route::resource('students', 'StudentController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
