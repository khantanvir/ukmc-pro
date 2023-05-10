<?php 

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Campus\CampusController;


Route::controller(CampusController::class)->group(function () {
    Route::get('campus-create', 'create');
    Route::get('all-campus', 'all');
    Route::get('archived-campus', 'archive');
});