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
Route::get('/james-dancy','Front\FrontendController@dancy')->name('jim.dancy');
Route::get('cch/conversion/guide','Front\FrontendController@guide')->name('cch.guide');
Route::get('our/board/of/directors','Front\FrontendController@BoDirectors')->name('board.directors');

//contact us form
Route::post('visitors/comment','Front\FrontendController@ContactForm')->name('visitors.comment');

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

//homepage-services content
Route::resource('service','Back\ServiceController');
Route::get('service/active/{id}','Back\ServiceController@active');
Route::get('service/inactive/{id}','Back\ServiceController@inactive');

//homepage-benefits content
Route::resource('benefit','Back\BenefitController');
Route::get('benefit/active/{id}','Back\BenefitController@active');
Route::get('benefit/inactive/{id}','Back\BenefitController@inactive');

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

//jobs
Route::resource('job','Back\AmericaJobController');
Route::get('job/active/{id}','Back\AmericaJobController@active');
Route::get('job/inactive/{id}','Back\AmericaJobController@inactive');

//dancy page
Route::resource('dancy','Back\DancyController');
Route::get('dancy/active/{id}','Back\DancyController@active');
Route::get('dancy/inactive/{id}','Back\DancyController@inactive');

