<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;

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

//Añadir un perro
Route::post('saveDog', [SpaController::class, 'saveDog']);

//Visualizar todos los perros
Route::get('getDogs', [SpaController::class, 'getDogs']);

//Filtrado todos los perros
Route::get('/getDog/${opcion}', [SpaController::class, 'getDog']);

//Get Img de la ruta /perros
Route::get('storage/{filename}', function ($filename) {
    $path = storage_path('app/perros/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    $file = file_get_contents($path);

    return response($file, 200)->header('Content-Type', 'image/jpeg');
})->where('filename', '.*');
// Route::group(['prefix' => 'posts', 'middleware' => 'auth:sanctum'], function () {
//     Route::post('save', [SpaController::class, 'saveDog']);
// });