<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\BuildPartController;
use App\Http\Controllers\PartTypeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\PartSpecController;
use App\Http\Controllers\PartSpecValueController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'build'], function () {
    Route::get('/', [BuildController::class, 'index']); // Show all builds
    Route::post('/', [BuildController::class, 'store']); // Create new build

    Route::get('/{id}', [BuildController::class, 'show']); // Show build by id
    Route::put('/{id}', [BuildController::class, 'update']); // Update build by id
    Route::delete('/{id}', [BuildController::class, 'destroy']); // Delete build by id

    Route::get('/{id}/part', [BuildPartController::class, 'index']); // Show all parts associated with build
    Route::post('/{id}/part', [BuildPartController::class, 'store']); // Add new parts to build

    Route::get('/{id}/part/{partId}', [BuildPartController::class, 'show']); // Show select build part by id
    Route::put('/{id}/part/{partId}', [BuildPartController::class, 'update']); // Update build part by id
    Route::delete('/{id}/part/{partId}', [BuildPartController::class, 'destroy']); // Delete build part from build
});

Route::group(['prefix' => 'component'], function () {
    Route::get('/', [PartTypeController::class, 'index']); // Show all part types
    Route::get('/list', [PartController::class, 'index']); // Show all parts
    Route::post('/', [PartTypeController::class, 'store']); // Create new part type

    Route::get('/{partType}', [PartTypeController::class, 'show']); // Show all parts of provided type ({type} =  part_types table type_short value)
    Route::post('/{partType}', [PartController::class, 'store']); // Create new part of selected type

    Route::get('/single/{id}', [PartController::class, 'show']); // Show part by id
    Route::put('/single/{id}', [PartController::class, 'update']); // Update part by id
    Route::delete('/single/{id}', [PartController::class, 'destroy']); // Delete part by id

});

Route::group(['prefix' => 'spec'], function () {
    Route::get('/', [PartSpecController::class, 'index']); // Get all spec types
    Route::get('/{partType}', [PartTypeController::class, 'show']); // Get all spec types of provided part type
    Route::post('/{partType}', [PartSpecController::class, 'store']); // Create new spec type for provided part type

    Route::get('/{partType}/{specType}', [PartSpecValueController::class, 'show']); // Get all spec values for provided part->spec type
    Route::post('/{partType}/{specType}', [PartSpecValueController::class, 'store']); // Create new spec value


});
