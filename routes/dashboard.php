<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\DashboardController;






    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    


