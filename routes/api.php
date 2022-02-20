<?php

use App\Http\Controllers\ItemController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::prefix('/item')->group(function () {
    Route::post('/store', [ItemController::class, 'store'])->name('item.store');
    Route::put('/{id}', [ItemController::class, 'update'])->name('item.update');
    Route::delete('/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
});
