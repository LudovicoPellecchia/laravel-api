<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//rotta api che ritorna il json con i dati recuperati
Route::get("projects", [ProjectController::class, "index"]);

//rotta api che ritorna il json con i dati di un singolo progetto(che richiamerò in frontend con chiamata axios)
Route::get("projects/{slug}", [ProjectController::class, "show"]);