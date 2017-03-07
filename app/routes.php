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

Route::get('/private-area', [
    'as' => 'blue_path',
    'uses' => 'HomeController@blue'
]);

Route::get('/brokerage', [
    'as' => 'red_path',
    'uses' => 'HomeController@red'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'AboutController@index'
]);

Route::get('/services', [
    'as' => 'services_path',
    'uses' => 'ServicesController@index'
]);


// PORTFOLIO
Route::get('/portfolio', [
    'as' => 'portfolio_path',
    'uses' => 'PortfolioController@index'
]);

Route::get('/portfolio/al-borj-building', [
    'as' => 'annahar_path',
    'uses' => 'PortfolioController@annahar'
]);

Route::get('/portfolio/oakridge', [
    'as' => 'oakridge_path',
    'uses' => 'PortfolioController@oakridge'
]);

Route::get('/portfolio/kampai-catering', [
    'as' => 'kampai_path',
    'uses' => 'PortfolioController@kampai'
]);

Route::get('/portfolio/saifi-pearl', [
    'as' => 'saifipearl_path',
    'uses' => 'PortfolioController@saifipearl'
]);

Route::get('/portfolio/the-palladium', [
    'as' => 'palladium_path',
    'uses' => 'PortfolioController@palladium'
]);

Route::get('/portfolio/the-pavillions', [
    'as' => 'pavillions_path',
    'uses' => 'PortfolioController@pavillions'
]);

Route::get('/portfolio/capital-gardens', [
    'as' => 'capitalgardens_path',
    'uses' => 'PortfolioController@capitalgardens'
]);

Route::get('/portfolio/atrium', [
    'as' => 'atrium_path',
    'uses' => 'PortfolioController@atrium'
]);

Route::get('/portfolio/monot-38', [
    'as' => 'monot_path',
    'uses' => 'PortfolioController@monot'
]);

Route::get('/portfolio/park-tower', [
    'as' => 'parktower_path',
    'uses' => 'PortfolioController@parktower'
]);

Route::get('/portfolio/saifi-suites', [
    'as' => 'saifisuites_path',
    'uses' => 'PortfolioController@saifisuites'
]);


Route::get('/portfolio/harbor', [
    'as' => 'harbor_path',
    'uses' => 'PortfolioController@harbor'
]);


Route::get('/expertise', [
    'as' => 'expertise_path',
    'uses' => 'ExpertiseController@index'
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

Route::get('/mobile-application', [
    'as' => 'application_path',
    'uses' => 'ApplicationController@index'
]);
