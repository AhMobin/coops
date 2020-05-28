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

//Homepage Banner
Route::resource('banner','Back\BannerController');
Route::get('banner/active/{id}','Back\BannerController@active');
Route::get('banner/inactive/{id}','Back\BannerController@inactive');
