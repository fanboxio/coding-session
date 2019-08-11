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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('clubs', 'Club\ClubController')
->only([
    'index',
    'show',
    'edit',
    'destroy',
]);


Route::resource('teams', 'Team\TeamController')
->only([
    'index',
    'show',
]);


Route::resource('playergroups', 'Team\PlayerGroupController')
->only([
    'index',
    'show',
]);


Route::resource('players', 'Player\PlayerController')
->only([
    'index',
    'show',
]);







