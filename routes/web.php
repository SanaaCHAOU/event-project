<?php

use Illuminate\Support\Facades\Route;

use App\Category;

use App\Demandes;

use App\Evenement;
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

Route::get('/send-mail/{id}', 'MailSend@mailsend');

Route::get('/send-mail/delete/{id}', 'MailSend@mailsendrefus');


Route::get('table-list', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::put('category/{id}', 'CategoryController@update');
Route::delete('category/{id}', 'CategoryController@destroy');

Route::get('demande/create', 'DemandeController@create');
Route::post('demande/', 'DemandeController@store');
Route::get('demande/edit/{id}', 'DemandeController@edit');

//Route::get('demandeOrganiserEvent', 'inscrit.demandeOrganiserEvent');



Route::get('events/', 'EventsController@index')->name('Event');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('newEvent', function () {
        return view('inscrit.newEvent');
	})->name('newEvent');
	
	Route::get('table-list', function () {
		$listcat = Category::all();
        return view('pages.table_list', ['cat'=>$listcat]);
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		$list=Demandes::all();
		return view('pages.notifications', ['liste' =>$list]);
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	
});

