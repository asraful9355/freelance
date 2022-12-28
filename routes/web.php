<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

Route::get('/', [FrontendController::class, 'index']);


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function (){
    //     return view('backend.master');
    // })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/my-profile', [UserController::class, 'index'])->name('my.profile');
    Route::get('/admin-change-password', [UserController::class, 'changePassword'])->name('admin.change.password');
    Route::post('/admin-update-password', [UserController::class, 'updatePassword'])->name('admin.update.password');

    
});
