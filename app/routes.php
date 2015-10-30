<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'HomeController@index'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'AboutController@index'
]);

Route::get('/services', [
    'as' => 'services_path',
    'uses' => 'ServicesController@index'
]);

Route::get('/portfolio', [
    'as' => 'portfolio_path',
    'uses' => 'PortfolioController@index'
]);

Route::get('/faq', [
    'as' => 'faq_path',
    'uses' => 'FaqController@index'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@index'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@getContactForm'
]);

Route::get('/privacy-policy', [
    'as' => 'privacy_path',
    'uses' => 'PrivacyController@index'
]);
