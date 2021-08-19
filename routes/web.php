<?php

use App\Http\Controllers\C_Login;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [C_Login::class, 'loginView']);
Route::post('/login_auth', [C_Login::class, 'loginAuth']);
Route::get('/dashboard/super_admin', function () {
    return view('super_admin/V_Dashboard_Super_Admin');
});
