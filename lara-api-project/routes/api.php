<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/test',function(){
//     return 'api is working';
// });

Route::post('/register',[ApiController::class,'register']);
Route::post('/login',[ApiController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::apiresource('/posts',PostController::class);
    Route::post('/logout',[ApiController::class,'logout']);

});