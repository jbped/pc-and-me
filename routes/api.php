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
    Route::post('/{id}/part', [BuildPartController::class, 'store']); // Add new part to build

    Route::get('/part/{id}', [BuildPartController::class, 'show']); // Show select build part by id
    Route::put('/part/{id}', [BuildPartController::class, 'update']); // Update build part by id
    Route::delete('/part/{id}', [BuildPartController::class, 'destroy']); // Delete build part from build
});

Route::group(['prefix' => 'component'], function () {
    Route::get('/', [PartTypeController::class, 'index']); // Show all part types
    Route::get('/list', [PartController::class, 'index']); // Show all parts
    Route::post('/', [PartTypeController::class, 'store']); // Create new part type

    Route::get('/{type}', [PartTypeController::class, 'show']); // Show all parts of provided type ({type} =  part_types table type_short value)
    Route::post('/{type}', [PartController::class, 'store']); // Create new part of selected type

    Route::get('/{id}', [PartController::class, 'show']); // Show part by id
    Route::put('/{id}', [PartController::class, 'update']); // Update part by id
    Route::delete('/{id}', [PartController::class, 'destroy']); // Delete part by id

});

Route::group(['prefix' => 'spec'], function () {
    Route::get('/', [PartSpecController::class, 'index']); // Get all spec types
    Route::get('/{partType}', [PartTypeController::class, 'show']); // Get all spec types of provided part type
    Route::post('/{partType}', [PartSpecController::class, 'store']); // Create new spec type for provided part type

    Route::get('/{partType}/{specType}', [PartSpecValueController::class, 'show']); // Get all spec values for provided part->spec type
    Route::post('/{partType}/{specType}', [PartSpecValueController::class, 'store']); // Create new spec value


});

// Route::get('build', function() {
//     return Build::count();
// });

// Route::post('build', function(Request $req) {
//     return Build::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/build/{id}
// // ------------------------------------------------------------------------
// Route::get('build/{id}', function($id) {
//     return Build::find($id);
// });

// Route::put('build/{id}', function(Request $req, $id) {
//     $build = Build::findOrFail($id);
//     $build->update($req->all());
//     return $build;
// });

// Route::delete('build/{id}', function($id) {
//     $build = Build::findOrFail($id);
//     $build->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/cooler
// // ------------------------------------------------------------------------
// Route::get('part/cooler', function() {
//     return Cooler::all();
// });

// Route::post('part/cooler', function(Request $req) {
//     return Cooler::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/cooler/{id}
// // ------------------------------------------------------------------------
// Route::get('part/cooler/{id}', function($id) {
//     $part = Cooler::find($id);
//     if(!$part) {
//         return response()->json(['error' => 'Part Not Found', 'requested_id' => $id], 404);
//     } else {
//         return response($part);
//     }
// });

// Route::put('part/cooler/{id}', function(Request $req, $id) {
//     $part = Cooler::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/cooler/{id}', function($id) {
//     $part = Cooler::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/cpu
// // ------------------------------------------------------------------------
// Route::get('part/cpu', function() {
//     return Cpu::all();
// });

// Route::post('part/cpu', function(Request $req) {
//     return Cpu::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/cpu/{id}
// // ------------------------------------------------------------------------
// Route::get('part/cpu/{id}', function($id) {
//     $part = Cpu::find($id);
//     if(!$part) {
//         return response()->json(['error' => 'Part Not Found', 'requested_id' => $id], 404);
//     } else {
//         return response($part);
//     }
// });

// Route::put('part/cpu/{id}', function(Request $req, $id) {
//     $part = Cpu::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/cpu/{id}', function($id) {
//     $part = Cpu::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/gpu
// // ------------------------------------------------------------------------
// Route::get('part/gpu', function() {
//     return Gpu::all();
// });

// Route::post('part/gpu', function() {
//     return Gpu::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/gpu/{id}
// // ------------------------------------------------------------------------
// Route::get('part/gpu/{id}', function($id) {
//     return Gpu::find($id);
// });

// Route::put('part/gpu/{id}', function(Request $req, $id) {
//     $part = Gpu::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/gpu/{id}', function($id) {
//     $part = Gpu::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/mobo
// // ------------------------------------------------------------------------
// Route::get('part/mobo', function() {
//     return Mobo::all();
// });

// Route::post('part/mobo', function() {
//     return Mobo::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/mobo/{id}
// // ------------------------------------------------------------------------
// Route::get('part/mobo/{id}', function($id) {
//     return Mobo::find($id);
// });

// Route::put('part/mobo/{id}', function(Request $req, $id) {
//     $part = Mobo::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/mobo/{id}', function($id) {
//     $part = Mobo::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/case
// // ------------------------------------------------------------------------
// Route::get('part/case', function() {
//     return PcCase::all();
// });

// Route::post('part/case', function() {
//     return PcCase::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/case/{id}
// // ------------------------------------------------------------------------
// Route::get('part/case/{id}', function($id) {
//     return PcCase::find($id);
// });

// Route::put('part/case/{id}', function(Request $req, $id) {
//     $part = PcCase::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/case/{id}', function($id) {
//     $part = PcCase::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/psu
// // ------------------------------------------------------------------------
// Route::get('part/psu', function() {
//     return Psu::all();
// });

// Route::post('part/psu', function() {
//     return Psu::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/psu/{id}
// // ------------------------------------------------------------------------
// Route::get('part/psu/{id}', function($id) {
//     return Psu::find($id);
// });

// Route::put('part/psu/{id}', function(Request $req, $id) {
//     $part = Psu::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/psu/{id}', function($id) {
//     $part = Psu::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/ram
// // ------------------------------------------------------------------------
// Route::get('part/ram', function() {
//     return Ram::all();
// });

// Route::post('part/ram', function() {
//     return Ram::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/ram/{id}
// // ------------------------------------------------------------------------
// Route::get('part/ram/{id}', function($id) {
//     return Ram::find($id);
// });

// Route::put('part/ram/{id}', function(Request $req, $id) {
//     $part = Ram::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/ram/{id}', function($id) {
//     $part = Ram::findOrFail($id);
//     $part->delete();
//     return 204;
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/storage
// // ------------------------------------------------------------------------
// Route::get('part/storage', function() {
//     return Storage::all();
// });

// Route::post('part/storage', function() {
//     return Storage::create($req->all());
// });

// // ------------------------------------------------------------------------
// // ROUTE: /api/part/storage/{id}
// // ------------------------------------------------------------------------
// Route::get('part/storage/{id}', function($id) {
//     return Storage::find($id);
// });

// Route::put('part/storage/{id}', function(Request $req, $id) {
//     $part = Storage::findOrFail($id);
//     $part->update($req->all());
//     return $part;
// });

// Route::delete('part/storage/{id}', function($id) {
//     $part = Storage::findOrFail($id);
//     $part->delete();
//     return 204;
// });