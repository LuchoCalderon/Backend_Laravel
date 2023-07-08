<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;
use App\Models\Contacto;

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
Route::get("/contactget",[ContactoController::class,"read"]);
Route::post("/contactcreate",[ContactoController::class,"create"]);
Route::put("/contactput",[ContactoController::class,"put"]);
Route::delete("/contactdelete",[ContactoController::class,"delete"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
