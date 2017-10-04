<?php
use App\State;
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
	$states = State::pluck('name', 'id');
    return view('welcome', compact('states'));
})->name('welcome');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|admin|clerk')->group(function(){
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::get('/financial_reports', 'FinancialReportsController@index')->name('financial_reports');
  Route::get('/inventory_reports', 'InventoryReportsController@index')->name('inventory_reports');
  Route::resource('/users', 'UserController');
  Route::resource('/items', 'ItemsController');
  Route::resource('/inventories', 'InventoriesController');
  Route::resource('/transits', 'TransitsController');
  Route::resource('/bookings', 'BookingsController');
  Route::post('/financial_searchs', 'FinancialReportsController@search')->name('financial_searchs');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search_transit', 'WelcomeController@search')->name('search_transit');
Route::post('/transit_transit', 'WelcomeController@track')->name('track_transit');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::get('/book/{id}', 'WelcomeController@book')->middleware('auth')->name('book');
Route::post('/booking', 'WelcomeController@book_transit')->name('booking');

