<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaqueController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\UserController;

// Routes qui nécessitent une authentification
Route::middleware(['auth', 'check_status'])->group(function () {
    
    // Plaque routes
    Route::resource('plaques', PlaqueController::class);
    Route::get('historiques/{plaque}', [HistoriqueController::class, 'index']);
    Route::get('plaques/relance/{plaque}', [PlaqueController::class, 'relance']);

    // Account management routes
    Route::prefix('accounts')->name('accounts.')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('index');
        Route::get('/create', [AccountController::class, 'create'])->name('create');
        Route::put('/{user}/toggle-status', [AccountController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('/{user}/edit', [AccountController::class, 'edit'])->name('edit');
        Route::put('/{user}', [AccountController::class, 'update'])->name('update');
        Route::delete('/{user}', [AccountController::class, 'destroy'])->name('destroy');
        Route::put('/{user}/update-frequence', [AccountController::class, 'updateFrequence'])->name('update.frequence');
        Route::post('/', [AccountController::class, 'store'])->name('store');
    });

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('index');

    // User list route
    Route::get('userlist', [HomeController::class, 'userlist'])->name('userlist');

    // User settings and password change routes
    Route::get('/changePassword', [UserController::class, 'showchangepasswordget'])->name('changepasswordget');
    Route::put('/changePassword/{id}', [UserController::class, 'changepasswordpost'])->name('changepasswordpost');
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Routes publiques (authentification non requise)
Route::prefix('auth')->group(function () {
    Route::get('logins', [HomeController::class, 'login'])->name('logins');
    Route::get('registers', [HomeController::class, 'registers'])->name('registers');
    Route::get('recovers', [HomeController::class, 'recovers'])->name('recovers');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('lockscreen');
    Route::get('userprofileedit', [HomeController::class, 'userprofileedit'])->name('userprofileedit');
    Route::get('useraccountsetting', [HomeController::class, 'useraccountsetting'])->name('useraccountsetting');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('userprivacysetting');
});
