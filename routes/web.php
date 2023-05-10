<?php

use Illuminate\Support\Facades\Route;
use App\Events\AddNewLead;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Setting\SettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('login', 'login');
    Route::get('reset-password', 'reset_password');
    Route::get('user-list', 'user_list');
});
Route::controller(TaskController::class)->group(function () {
    Route::get('task-create', 'create');
    Route::get('task-list', 'all');
    Route::get('my-tasks', 'my_tasks');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('company-settings', 'company_settings');
    Route::get('profile-settings', 'profile_settings');
    Route::get('edit_profile', 'edit_profile');
});

Route::get('test', function () {
    AddNewLead::dispatch('Hello this is test');
    //event(new AddNewLead('hello world'));
    return "Event has been sent!";
});
