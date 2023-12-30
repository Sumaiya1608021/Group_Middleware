<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');

});
// Route::get('/stock', function () {
//     return view('stock');
// })->middleware('construction');

Route::get('report', function () {
    return view('report');

});


//Route::get('report',[ReportController::class,'show'])->middleware('construction');

Route::middleware(['construction'])->group(function(){
    Route::get('/stock', function () {
        return view('stock');
    });
    Route::get('report',[ReportController::class,'show']);
});



