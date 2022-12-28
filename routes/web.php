<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MenuController;

Route::get('/', [FrontendController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function (){
    //     return view('backend.master');
    // })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/my-profile', [UserController::class, 'index'])->name('my.profile');


    Route::group(['prefix'=>'menu'], function(){
        Route::get('/index', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/destroy/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
        Route::get('/menu-active/{id}', [MenuController::class, 'active'])->name('menu.active');
        Route::get('/menu-inactive/{id}', [MenuController::class, 'inactive'])->name('menu.in_active');

    });

    
});
