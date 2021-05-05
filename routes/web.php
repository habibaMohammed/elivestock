<?php
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





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix'  =>  'admin'], function () {

    //Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::get('/login', [App\Http\Controllers\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
   // Route::get('/login', [AdminLoginController::class, 'showLoginForm']);
    Route::post('login', [App\Http\Controllers\AdminLoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', [App\Http\Controllers\AdminLoginController::class, 'logout'])->name('admin.logout');
    
    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
    
    });
    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('admin.settings');
    Route::post('settings', [App\Http\Controllers\SettingController::class,'update'])->name('admin.settings.update');

    
    });