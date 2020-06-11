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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::get('/services/web-and-app-development', 'PagesController@web_and_app');
Route::get('/services/custom-software', 'PagesController@custom_software');

Route::get('/services/blended-learning', 'PagesController@blendedLearning');
Route::get('/services/custom-content-development', 'PagesController@customContentDevelopment');
Route::get('/services/flash-to-html5', 'PagesController@flashToHtml5');
Route::get('/services/gamification', 'PagesController@gamification');
Route::get('/services/learning-management-system', 'PagesController@learningManagementSystem');
Route::get('/services/legacy-content-conversion', 'PagesController@legacyContentConversion');
Route::get('/services/localization-and-translation', 'PagesController@localizationAndTranslation');
Route::get('/services/mobile-learning', 'PagesController@mobileLearning');
Route::get('/services/rapid-development', 'PagesController@rapidDevelopment');
Route::get('/services/animation', 'PagesController@animationPage');
// Route::get('/contact','PagesController@contact');


Route::get('/contact', 'ContactUsController@contactUS');
Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUSPost']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('license', 'LicensesController')->middleware('auth');
