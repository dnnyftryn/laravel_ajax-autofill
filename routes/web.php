<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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

// Route::controller(SearchController::class)->group(function(){
//     Route::get('demo-search', 'index');
//     Route::get('autocomplete', 'autocomplete')->name('autocomplete');
// });
Route::get('demo-search', [SearchController::class, 'index']);
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');

Route::get('/index', [EmployeesController::class, 'index']);
Route::post('/employees/getEmployees/', [EmployeesController::class, 'getEmployees'])->name('employees.getEmployees');
