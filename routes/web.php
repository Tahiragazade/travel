<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');

Route::prefix('colors')->group(function () {
Route::get('/', [App\Http\Controllers\ColorController::class, 'index'])->name('colors.index');
Route::get('/create', [App\Http\Controllers\ColorController::class, 'create'])->name('colors.create');
Route::post('/store', [App\Http\Controllers\ColorController::class, 'store'])->name('colors.store');
Route::get('/edit/{id}', [App\Http\Controllers\ColorController::class, 'edit'])->name('colors.edit');
Route::put('/edit/{id}', [App\Http\Controllers\ColorController::class, 'update'])->name('colors.update');
Route::get('/delete/{id}', [\App\Http\Controllers\ColorController::class, 'delete'])->name('colors.delete-view');
Route::DELETE('/delete/{id}', [\App\Http\Controllers\ColorController::class, 'delete'])->name('colors.delete');
});

Route::prefix('cars')->group(function () {
	Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
	Route::get('/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
	Route::post('/store', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
	Route::get('/edit/{id}', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
	Route::put('/edit/{id}', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
	Route::get('/delete/{id}', [\App\Http\Controllers\CarController::class, 'delete'])->name('cars.delete-view');
	Route::DELETE('/delete/{id}', [\App\Http\Controllers\CarController::class, 'delete'])->name('cars.delete');
});
Route::prefix('regions')->group(function () {
	Route::get('/', [App\Http\Controllers\RegionController::class, 'index'])->name('regions.index');
	Route::get('/create', [App\Http\Controllers\RegionController::class, 'create'])->name('regions.create');
	Route::post('/store', [App\Http\Controllers\RegionController::class, 'store'])->name('regions.store');
	Route::get('/edit/{id}', [App\Http\Controllers\RegionController::class, 'edit'])->name('regions.edit');
	Route::put('/edit/{id}', [App\Http\Controllers\RegionController::class, 'update'])->name('regions.update');
	Route::get('/delete/{id}', [\App\Http\Controllers\RegionController::class, 'delete'])->name('regions.delete-view');
	Route::DELETE('/delete/{id}', [\App\Http\Controllers\RegionController::class, 'delete'])->name('regions.delete');
});
Route::prefix('travels')->group(function () {
	Route::get('/', [App\Http\Controllers\TravelController::class, 'index'])->name('travels.index');
	Route::get('/create/{id}', [App\Http\Controllers\TravelController::class, 'create'])->name('travels.create');
	Route::post('/store', [App\Http\Controllers\TravelController::class, 'store'])->name('travels.store');
	Route::get('/edit/{id}', [App\Http\Controllers\TravelController::class, 'edit'])->name('travels.edit');
	Route::put('/edit/{id}', [App\Http\Controllers\TravelController::class, 'update'])->name('travels.update');
	Route::get('/delete/{id}', [\App\Http\Controllers\TravelController::class, 'delete'])->name('travels.delete-view');
	Route::DELETE('/delete/{id}', [\App\Http\Controllers\TravelController::class, 'delete'])->name('travels.delete');
});
Route::prefix('customers')->group(function () {
	Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
	Route::get('/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');
	Route::post('/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
	Route::get('/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');
	Route::get('/add-travel/{id}', [App\Http\Controllers\CustomerController::class, 'addTravel'])->name('customers.add');
	Route::post('/add-travel/{id}', [App\Http\Controllers\CustomerController::class, 'addTravelStore'])->name('customers.addNew');
	Route::put('/edit/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
	Route::get('/delete/{id}', [\App\Http\Controllers\CustomerController::class, 'delete'])->name('customers.delete-view');
	Route::DELETE('/delete/{id}', [\App\Http\Controllers\CustomerController::class, 'delete'])->name('customers.delete');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
