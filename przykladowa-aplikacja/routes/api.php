<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lav_people;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/people', function (Request $request) {
    return $request->people();
});


Route::get('Hampel/309397/people/readall', [lav_people::class, 'readall']);
Route::post('Hampel/309397/people/create', [lav_people::class, 'create']);
Route::get('Hampel/309397/people/read/{id}', [lav_people::class, 'read']);
Route::put('Hampel/309397/people/update/{id}', [lav_people::class, 'update']);
Route::delete('Hampel/309397/people/delete/{id}', [lav_people::class, 'delete']);
