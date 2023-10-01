<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate \ Contracts \ Container \ BindingResolutionException;
use Illuminate\Support\Facades\Auth;

use function App\Http\Controllers\Admin\index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','HomeController@index')
    ->name('home');
    
Route::get('/details/{slug}','DetailController@index')
    ->name('details');

Route::post('/checkout/{id}','CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}','CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}','CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}','CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);



Route::prefix('admin')
 ->namespace('Admin')
 ->middleware(['auth','admin'])
 ->group(function() {
    Route::get('/', 'DashboardController@index')
        ->name('dashboard');

    Route::resource('travel-package','TravelPackageController');
    Route::resource('gallery','GalleryController');
    Route::resource('transaction','TransactionController');


 });

Auth::routes(['verify' => true]);
