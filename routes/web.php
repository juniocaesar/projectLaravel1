<?php

use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_SuperAdmin;
use App\Http\Controllers\C_AdminPusat;
use App\Http\Controllers\C_AdminUnit;
use App\Http\Controllers\C_Operator;
use Illuminate\Support\Facades\Route;
use App\Exceptions\Handler;

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
    return redirect('/login');
});
Route::get('/login', [C_Login::class, 'loginView']);
Route::post('/login_auth', [C_Login::class, 'loginAuth']);
Route::get('/dashboard/super_admin', [C_SuperAdmin::class, 'displayView']);
Route::get('/dashboard/admin_pusat', [C_AdminPusat::class, 'displayView']);
Route::get('/dashboard/admin_unit', [C_AdminUnit::class, 'displayView']);
Route::get('/dashboard/operator', [C_Operator::class, 'displayView']);
