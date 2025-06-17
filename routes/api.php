<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;
use PHPUnit\Framework\Attributes\PostCondition;

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

Route::prefix("/posts")->group(function() {
    Route::get("/", [PostController::class, 'index'])->name("/allPosts");
    Route::get("/count", [PostController::class, 'countPosts']);
    Route::post("/create", [PostController::class, 'create']);
    Route::put("/edit/{id}", [PostController::class, 'edit']);
    Route::delete("/delete/{id}", [PostController::class, 'destroy']);
    Route::get("/show/{id}", [PostController::class, 'show']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
