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


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/','Front\FrontendController@index')->name('index.page');
Route::get('/about-us','Front\FrontendController@about')->name('about.page');
Route::get('/our-story','Front\FrontendController@story')->name('story.page');
Route::get('/american-dream','Front\FrontendController@dream')->name('dream.page');
Route::get('/our-goals','Front\FrontendController@goals')->name('goals.page');
Route::get('/jobs-build-america','Front\FrontendController@jobs')->name('jobs.page');
Route::get('/contact-us','Front\FrontendController@contact')->name('contact.page');



/*
|--------------------------------------------------------------------------
| Authenticate Route (FOR ADMIN LOGIN)
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'root'], function () {
    Auth::routes(['register'=>false]);
});
Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/


//homepage-banner
Route::resource('banner','Back\BannerController');
Route::get('banner/active/{id}','Back\BannerController@active');
Route::get('banner/inactive/{id}','Back\BannerController@inactive');

//about
Route::resource('about','Back\AboutController');
Route::get('about/active/{id}','Back\AboutController@active');
Route::get('about/inactive/{id}','Back\AboutController@inactive');

//story
Route::resource('story','Back\StoryController');
Route::get('story/active/{id}','Back\StoryController@active');
Route::get('story/inactive/{id}','Back\StoryController@inactive');

//dream
Route::resource('dream','Back\DreamController');
Route::get('dream/active/{id}','Back\DreamController@active');
Route::get('dream/inactive/{id}','Back\DreamController@inactive');

//goal
Route::resource('goal','Back\GoalController');
Route::get('goal/active/{id}','Back\GoalController@active');
Route::get('goal/inactive/{id}','Back\GoalController@inactive');
