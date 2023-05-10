<?php 

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Agent\AgentController;


Route::controller(AgentController::class)->group(function () {
    Route::get('agents', 'agents');
});