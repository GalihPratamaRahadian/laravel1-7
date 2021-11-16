<?php

use App\Models\Friends;
use App\Http\Controller\Api\CobaController;
use App\Http\Controller\Api\GroupsController;
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

Route::get('', [App\Http\Controllers\Api\CobaController::class, 'index']);
Route::resources([
    'friends' => App\Http\Controllers\Api\CobaController::class,
    'groups' => App\Http\Controllers\Api\GroupsController::class,
]);