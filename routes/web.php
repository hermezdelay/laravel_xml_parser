<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/parser', function () {
    return view('parser');
});


Route::get('/affichage',  [ImportController::class ,'affichage']);
/*Route::prefix('/parser')->name('parser.')->controller(ImportController::class)->group( function(){

    Route::post('/', 'importXml');

});
*/

//Route::post('/parser', [\App\Http\Controllers\ImportController::class  ,'create()']);
Route::post('/parser', [ImportController::class ,'importXml']);
