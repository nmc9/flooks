<?php

use Illuminate\Support\Facades\Route;
use App\Owner;
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
    return view('index')->with(['owner' => new Owner()]);
})->name('home');

Route::get('/contact', function () {
    return view('index')->with(['owner' => new Owner()]);
})->name('contact');

Route::get('/direction', function () {
    return view('index')->with(['owner' => new Owner()]);
})->name('direction');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/facebook',function(){
	return redirect('https://www.facebook.com/pages/Flooks-Meats-Locker-Plant/151919561516532');

	})->name('facebook');