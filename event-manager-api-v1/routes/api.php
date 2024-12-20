<?php

use App\Http\Controllers\Api\V1\RegistrationController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('registrations', RegistrationController::class);
    Route::apiResource('teams', TeamController::class);
    Route::apiResource('events', EventController::class);
});

Route::post('/registrations', [RegistrationController::class, 'store']);

Route::post('/teams', [TeamController::class, 'createTeam']);
Route::get('/teams/check/{name}', [TeamController::class, 'checkTeamByName']);
