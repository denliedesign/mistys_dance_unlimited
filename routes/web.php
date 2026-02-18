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

use App\Blog;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\HubController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\StudentController;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-mist');
});

Route::get('/parent-responses', function () {
    return view('/parent-responses');
});

// Form submit only
//Route::post('/trialclass', [FreeTrialController::class, 'store'])->name('trial.store');
//Route::post('/MyFirstDanceClass', [StartController::class, 'store'])->name('start.store');

// If someone browses to /trial, send them to the page that has the form
//Route::permanentRedirect('/trial', '/trialclass'); // or Route::redirect('/trial', '/trialclass');

//Route::get('/{page}', function () {
//    return view('trialclass'); // file: resources/views/trialclass.blade.php
//})->where('page', '^(?i)trial-?class$');

//Route::get('/errors/no_placement', function () {
//    return view('/errors/no_placement');
//});

//Route::get('MyFirstDanceClass', function () {
//    return view('welcome-mist');
//});

Route::get('absence-reporting', function () {
    return view('absence-reporting');
});

Route::get('aboutus', function () {
    return view('aboutus-mist');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('contact', function () {
    return view('contact');
});

//Route::get('birthday', function () {
//    return view('birthday');
//});

Route::get('parties', function () {
    return view('parties');
});

Route::get('pl', function () {
    return view('/pl-mist');
});

Route::get('bravo', function () {
    return view('bravo');
});

Route::get('studio', function () {
    return view('/studio-mist');
});

Route::get('employment', function () {
    return view('/employment-mist');
});

Route::get('littles', function () {
    return view('littles');
});

Route::get('big-kids', function () {
    return view('big-kids');
});

//Route::get('adults', function () {
//    return view('adults');
//});

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

Route::get('/pc', function () {
    return view('/pc-mist');
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

//Route::get('/recitals', function () {
//    return view('recitals.index');
//});

Route::get('pre-pro', function () {
    return view('pre-pro');
});

Route::get('summer', function () {
    return view('summer-mist');
});

Route::get('_old-summer', function () {
    return view('_old-summer');
});

Route::get('fall', function () {
    return view('fall-mist');
});

Route::get('fall-studio', function () {
    return view('fall-studio');
});

Route::get('fall-online', function () {
    return view('fall-online');
});


Route::get('thirdoption', function () {
    return view('thirdoption');
});

Route::get('thirdoption-temp', function () {
    return view('thirdoption-temp');
});

Route::get('thirdoption-faq', function () {
    return view('thirdoption-faq');
});

Route::get('community-first', function () {
    return view('community-first-mist');
});

//Route::get('community', function () {
//    return view('community.index');
//});

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

Route::get('/saferstudiopolicy/3-12-20', function () {
    return view('saferstudiopolicy.3-12-20');
});

Route::get('/saferstudiopolicy/3-13-20', function () {
    return view('saferstudiopolicy.3-13-20');
});

Route::get('/saferstudiopolicy/3-16-20', function () {
    return view('saferstudiopolicy.3-16-20');
});

Route::get('/saferstudiopolicy/3-20-20', function () {
    return view('saferstudiopolicy.3-20-20');
});

Route::get('/saferstudiopolicy/4-8-20', function () {
    return view('saferstudiopolicy.4-8-20');
});

Route::get('/saferstudiopolicy/4-15-20', function () {
    return view('saferstudiopolicy.4-15-20');
});

Route::get('/saferstudiopolicy/4-28-20', function () {
    return view('saferstudiopolicy.4-28-20');
});

Route::get('/saferstudiopolicy/5-15-20', function () {
    return view('saferstudiopolicy.5-15-20');
});

Route::get('/saferstudiopolicy/6-10-20', function () {
    return view('saferstudiopolicy.6-10-20');
});

Route::get('/saferstudiopolicy/6-17-20', function () {
    return view('saferstudiopolicy.6-17-20');
});

Route::get('/saferstudiopolicy/6-22-20', function () {
    return view('saferstudiopolicy.6-22-20');
});

Route::get('/saferstudiopolicy/6-24-20', function () {
    return view('saferstudiopolicy.6-24-20');
});

Route::get('/saferstudiopolicy/6-29-20', function () {
    return view('saferstudiopolicy.6-29-20');
});

Route::get('/saferstudiopolicy/7-28-20', function () {
    return view('saferstudiopolicy.7-28-20');
});

Route::get('/saferstudiopolicy/7-30-20', function () {
    return view('saferstudiopolicy.7-30-20');
});

Route::get('/saferstudiopolicy/9-1-20', function () {
    return view('saferstudiopolicy.9-1-20');
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

Route::get('dance-class-la-crosse-wi', function () {
    return view('dance-class-la-crosse-wi');
});

Route::get('/saferstudiopolicy/archive', function () {
    return view('saferstudiopolicy.archive');
});

Route::get('pre-pro-2019', function () {
    return view('pre-pro-2019');
});

Route::get('mdu-fest', function () {
    return view('mdu-fest');
});

Route::get('/classes/1-4', function () {
    return view('/classes/1-4');
});

Route::get('/classes/5-8', function () {
    return view('/classes/5-8');
});

Route::get('/classes/9-and-up', function () {
    return view('/classes/9-and-up');
});

//Route::get('/classes/adult', function () {
//    return view('/classes/adult');
//});

Route::get('/classes/boys', function () {
    return view('/classes/boys');
});

Route::get('/classes/ballet-la-crosse', function () {
    return view('/classes/ballet-la-crosse');
});

Route::get('/classes/performing-groups', function () {
    return view('/classes/performing-groups');
});

Route::get('/classes/pre-pro', function () {
    return view('/classes/pre-pro');
});

Route::get('/classes', function () {
    return view('/classes');
});

Route::get('/alumni', function () {
    return view('/alumni-mist');
});

Route::get('/dance-studios-in-la-crosse-wi', function () {
    return view('/dance-studios-in-la-crosse-wi');
});
Route::get('/dance-classes-in-la-crosse-wi', function () {
    return view('/dance-classes-in-la-crosse-wi');
});
Route::get('/dance-classes-la-crosse', function () {
    return view('/dance-classes-la-crosse');
});


Route::get('dance-studios-in-west-salem-wi', function () {
    return view('dance-studios-in-west-salem-wi');
});

Route::get('la-crosse-dance', function () {
    return view('la-crosse-dance');
});

Route::get('west-salem-dance', function () {
    return view('west-salem-dance');
});

Route::get('la-crosse-dance-team', function () {
    return view('la-crosse-dance-team');
});
Route::get('onalaska-dance-team', function () {
    return view('onalaska-dance-team');
});
Route::get('holmen-dance-team', function () {
    return view('holmen-dance-team');
});
Route::get('west-salem-dance-team', function () {
    return view('west-salem-dance-team');
});
//Route::get('tomah-dance-team', function () {
//    return view('tomah-dance-team');
//});
Route::get('get-dance-team', function () {
    return view('get-dance-team');
});
Route::get('dance-team', function () {
    return view('dance-team');
});
Route::get('dance-camp-la-crosse', function () {
    return view('dance-camp-la-crosse');
});
Route::get('ballet-camps-la-crosse', function () {
    return view('ballet-camps-la-crosse');
});
Route::get('ballet-la-crosse', function () {
    return view('ballet-la-crosse');
});
Route::get('tumble-classes-la-crosse', function () {
    return view('tumble-classes-la-crosse');
});
Route::get('dance-onalaska', function () { return view('dance-onalaska'); });
Route::get('dance-la-crosse', function () { return view('dance-la-crosse'); });
Route::get('dance-la-crescent', function () { return view('dance-la-crescent'); });
Route::get('dance-west-salem', function () { return view('dance-west-salem'); });
Route::get('dance-holmen', function () { return view('dance-holmen'); });

Route::get('community-programming', function () {
    return view('community-programming-mist');
});

Route::get('recital', function () {
    $hubs = (new App\Http\Controllers\HubController)->getHubs(); // assuming getHubs() is a static method in your HubController
    return view('hubs.index', ['hubs' => $hubs]);
});

Route::get('frozen-friends', 'FrozenFriendsController@index')->name('frozen-friends');
Route::post('frozen-friends', 'FrozenFriendsController@store')->name('frozen-friends.store');

Route::resource('events', 'EventController');
Route::resource('promotions', 'PromotionController');
Route::resource('articles', 'ArticleController');
Route::resource('videos', 'VideoController');
Route::resource('communities', 'CommunityController');
//Route::resource('posts', 'PostController');
//Route::resource('recitals/generals', 'GeneralController');
//Route::resource('recitals/ads', 'AdController');
//Route::resource('recitals/handbooks', 'HandbookController');
//Route::resource('recitals/memories', 'MemoryController');
//Route::resource('recitals/performances', 'PerformanceController');
//Route::resource('recitals/rehearsals', 'RehearsalController');
//Route::resource('recitals/seniors', 'SeniorController');
//Route::resource('recitals/tickets', 'TicketController');
//Route::resource('recitals/photos', 'PhotoController');
//Route::resource('recitals/volunteers', 'VolunteerController');
//Route::resource('students', 'StudentController');
//Route::resource('contents', StudentController::class);
Route::resource('updates', 'UpdateController');
Route::resource('fests', 'FestController');
Route::resource('hubs', 'HubController');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blogs', 'BlogController')->except(['show']);
Route::get('/blogs/{blog:slug}', ['BlogController', 'show'])->name('blogs.show');

Route::middleware(['auth', 'redirect.user'])->group(function () {
    Route::get('/levels', function () {
    });
//
//    Route::get('/placements/showAll', 'PlacementController@showAll')->name('placements.showAll');
//    Route::resource('placements', 'PlacementController');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/levels', [LevelsController::class, 'index'])->name('levels.index');
});

Route::get('/levels/import', [LevelsController::class, 'showForm'])->name('levels.import.form');
Route::post('/levels/import', [LevelsController::class, 'import'])->name('levels.import');

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

