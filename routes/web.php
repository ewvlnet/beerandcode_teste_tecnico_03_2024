<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Profile\{
    GitHubController,
    PermissionController,
    ProfileController,
    StartController,
    UserController,
    UserMyDataController
};

/*--================================
   PROFILE ROUTES
=================================--*/
Route::prefix('account')
    ->middleware(['web', 'auth', 'verified'])
    ->name('profile.')
    ->group(function () {

        Route::resource('/profiles', ProfileController::class)->except(['show']);
        Route::resource('/permissions', PermissionController::class)->except(['show']);

        Route::resource('/users', UserController::class)->except(['show']);
        Route::get('/users/{user}/publish', [UserController::class, 'publish'])->name('users.publish');

        Route::put('/mydata/{user}', [UserMyDataController::class, 'update'])->name('mydata.update');
        Route::get('/mydata/{user}/edit', [UserMyDataController::class, 'edit'])->name('mydata.edit');

        Route::get('/start', [StartController::class, 'index'])->name('start');

        Route::get('/github', [GitHubController::class, 'index'])->name('github.index')->can('github_users');
        Route::get('/github/update-users', [GitHubController::class, 'updateUsers'])->name('github.update.users')->can('github_users_update');

    });

Route::prefix('')
    ->middleware(['web'])
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('login');
        })->name('site.home');
    });

require __DIR__ . '/auth.php';
