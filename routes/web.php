<?php
use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

route::get('/liste-apprenants',[ApprenantsController::class,'index']);
route::get('/liste-formation',[formationController::class,'index']);