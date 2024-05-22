<?php

use App\Http\Controllers\API\PageController;
use App\Http\Controllers\API\ProductController;
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

Route::get('user-data', [PageController::class, 'leaderboard']);
Route::get('find-user', [PageController::class, 'removeTree']);

Route::get('tree-type', [ProductController::class, 'getTreeType']);
Route::get('user-tree/{id}', [ProductController::class, 'userTree']);

Route::post('add-tree', [ProductController::class, 'addTree']);
Route::post('remove-tree', [ProductController::class, 'removeTree']);
