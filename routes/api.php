<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\UsuarioController;

use App\Models\Contacto;
use App\Models\Usuario;



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

Route::get("/usuario",[UsuarioController::class,"read"]);
Route::post("/usuario",[UsuarioController::class,"create"]);
Route::put("/usuario",[UsuarioController::class,"update"]);
Route::delete("/usuario",[UsuarioController::class,"delete"]);

Route::get("/contact",[ContactoController::class,"read"]);
Route::post("/contact",[ContactoController::class,"create"]);
Route::put("/contact",[ContactoController::class,"update"]);
Route::delete("/contact",[ContactoController::class,"delete"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
