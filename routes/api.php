<?php

use App\Http\Controllers\ChecklistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('checklist', ChecklistController::class);

//
//Route::get('checklist', [ChecklistController::class, 'index']);
////Route::get('checklist/create', [ChecklistController::class, 'create']);
//Route::get('checklist/{id}', [ChecklistController::class, 'show']);
//
//route::post('checklist', [ChecklistController::class, 'store']);
//Route::put('checklist/{id}', [ChecklistController::class, 'update']);
//route::delete('checklist/{id}', [ChecklistController::class, 'destroy']);
