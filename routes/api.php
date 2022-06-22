<?php
use App\Http\Controllers\ServicesController;
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
// public routes
Route::resource('services', ServicesController::class); 
// Route::get('/services/search/{title}',[ServicesController::class, 'search']);


// protected routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::get('/services/search/{title}',[ServicesController::class, 'search']);
});

// Route::get('/services',[ServicesController::class, 'index']);
// Route::post('/services',[ServicesController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
