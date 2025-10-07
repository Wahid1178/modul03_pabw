<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TamuController;

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

Route::get('/form',[DataController::class,'form'] );
Route::post('/proses',([DataController::class,'proses'] ));

Route::get('/tamu', [TamuController::class, 'index']);
Route::get('/tamu/create', [TamuController::class, 'create']);
Route::post('/tamu', [TamuController::class, 'store']);
    
