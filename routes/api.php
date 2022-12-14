<?php
use App\Http\Controllers\{
    CademiController,
    UserController,
    ApiController
};
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

Route::post('users', [ApiController::class, 'getAllUsers'])->name('api.cademi.users'); 
Route::post('users/store', [ApiController::class, 'store'])->name('api.cademi.store'); 