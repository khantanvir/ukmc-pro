<?php

use Illuminate\Support\Facades\Route;
use App\Events\AddNewLead;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Agent\AgentTaskController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('login', 'login');
    Route::get('get-notification-count', 'get_notification_count');
    Route::get('get-my-notification', 'get_my_notification');
    Route::get('my-notification-list', 'get_all_my_notification');
});
Route::controller(TaskController::class)->group(function () {
    Route::get('task-create', 'create');
    Route::post('task-store', 'store');
    Route::get('task-list', 'all');
    Route::get('my-tasks', 'my_tasks');
    Route::get('edit-task/{slug?}', 'edit');
    Route::post('edit-task-post', 'edit_post');
    Route::get('task/details/{slug?}','details');
    Route::post('task-coment-store', 'task_commment');
    Route::post('task-status-chnage', 'task_status_chnage');
});
Route::controller(AgentTaskController::class)->group(function () {
    Route::get('agent-task-create', 'create');
    Route::post('agent-task-store', 'store');
    Route::get('agent-task-list', 'all');
    Route::get('agent-my-tasks', 'my_tasks');
    Route::get('agent-edit-task/{slug?}', 'edit');
    Route::post('agent-edit-task-post', 'edit_post');
    Route::get('agent/task/details/{slug?}','details');
    Route::post('agent-task-coment-store', 'task_commment');
    Route::post('agent-task-status-chnage', 'task_status_chnage');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('company-settings', 'company_settings');
    Route::post('company-setting-post', 'company_setting_post');
    Route::get('profile-settings', 'profile_settings');
    Route::get('edit_profile', 'edit_profile');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('user-login-post', 'user_login');
    Route::get('sign-out', 'sign_out');
    Route::get('reset-password', 'reset_password');
    Route::post('reset-password-post', 'reset_password_post');
    Route::get('reset-password-form/{token?}', 'reset_password_form');
    Route::post('reset-password-form-post', 'reset_password_form_post');
});

Route::get('test', function () {
    AddNewLead::dispatch('Hello this is test');
    //event(new AddNewLead('hello world'));
    return "Event has been sent!";
});

Route::controller(UserController::class)->group(function () {
    Route::get('user-list', 'user_list');
    Route::get('create-teacher', 'create_teacher');
    Route::get('create-admission-manager', 'create_admission_manager');
    Route::post('create-admission-manager-post-data', 'create_admission_manager_post_data');
    Route::post('create-teacher-post-data', 'create_teacher_post_data');
    Route::post('user-status-chnage', 'user_status_chnage');
    Route::get('reset-user-list', 'reset_user_list')->name('reset_user_list');
    Route::post('user-role-confirm', 'user_role_confirm');
    Route::get('edit-teacher/{slug?}', 'edit_teacher');
    Route::get('edit-admission-manager/{slug?}', 'edit_admission_manager');
    Route::post('edit-teacher-data-post', 'edit_teacher_data_post');
    Route::post('edit-officer-data-post', 'edit_officer_data_post');
});
