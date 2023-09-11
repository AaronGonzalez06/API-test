<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\QuestionController;

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


Route::get('theme/list', [ThemeController::class, 'list']);
Route::get('question/list', [QuestionController::class, 'list']);
Route::get('question/listThemeQuestion/{id}', [QuestionController::class, 'listThemeQuestion']);
Route::get('question/test/{themeId}', [QuestionController::class, 'test']);


