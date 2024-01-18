<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('Bis/310378/People/create', [PeopleController::class, 'create']);
Route::get('Bis/310378/People/read/{id}', [PeopleController::class, 'read']);
Route::put('Bis/310378/People/update/{id}', [PeopleController::class, 'update']);
Route::delete('Bis/310378/People/delete/{id}', [PeopleController::class, 'delete']);
Route::get('Bis/310378/People/read_all', [PeopleController::class, 'read_all']);
