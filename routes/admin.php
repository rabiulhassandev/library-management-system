<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\ReportIssueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserStatusController;
use App\Http\Controllers\Admin\PageBuilderController;
use App\Http\Controllers\Admin\Setting\SettingController;


/**
 *
 *
 * ----------------------------------------------------------
 * Admin Subdomain Group
 * ----------------------------------------------------------
 *
 */
Route::domain(config('domain.admin'))->group(function () {
    /**
     *
     *
     * ----------------------------------------------------------
     * Lock Management
     * ----------------------------------------------------------
     *
     */
    Route::prefix('lock-screen')->group(function () {
        Route::get('/', [LockScreenController::class, 'lock'])->name('admin.lock-screen');
        Route::get('/security-checkpoint', [LockScreenController::class, 'unlock'])->name('admin.lock-screen.unlock.view');
        Route::post('/security-checkpoint', [LockScreenController::class, 'unlockScreen'])->name('admin.lock-screen.unlock');
    });



    /**
     *
     *
     * ----------------------------------------------------------
     * Auth Middleware Group
     * ----------------------------------------------------------
     *
     */
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/', [DashboardController::class, 'redirect'])->name('admin.redirect');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


        /**
         *
         *
         * ----------------------------------------------------------
         * User Management
         * ----------------------------------------------------------
         *
         */


        Route::prefix('user')->group(function () {
            /**
             *
             *
             * ----------------------------------------------------------
             * User Status Management
             * ----------------------------------------------------------
             *
             */
            Route::prefix('status')->middleware(['permission:user_status_management'])->group(function () {
                Route::get('/', [UserStatusController::class, 'index'])->name('admin.user-status.index');
                Route::get('/create', [UserStatusController::class, 'create'])->name('admin.user-status.create');
                Route::post('/create', [UserStatusController::class, 'store'])->name('admin.user-status.store');
                Route::get('/{userStatus}/edit', [UserStatusController::class, 'edit'])->name('admin.user-status.edit');
                Route::put('/{userStatus}/edit', [UserStatusController::class, 'update'])->name('admin.user-status.update');
                Route::delete('/{userStatus}/delete', [UserStatusController::class, 'destroy'])->name('admin.user-status.delete');
            }); //end role route group
            /**
             *
             *
             * ----------------------------------------------------------
             * Role Management
             * ----------------------------------------------------------
             *
             */
            Route::prefix('role')->group(function () {
                Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
                Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
                Route::post('/create', [RoleController::class, 'store'])->name('admin.role.store');
                Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
                Route::put('/{role}/edit', [RoleController::class, 'update'])->name('admin.role.update');
                Route::delete('/{role}/delete', [RoleController::class, 'destroy'])->name('admin.role.delete');
            }); //end role route group

            /**
             *
             *
             * ----------------------------------------------------------
             * Permission Management
             * ----------------------------------------------------------
             *
             */
            Route::prefix('/permission')->group(function () {
                Route::get('/', [PermissionController::class, 'index'])->name('admin.permission.index');
                Route::get('/create', [PermissionController::class, 'create'])->name('admin.permission.create');
                Route::post('/create', [PermissionController::class, 'store'])->name('admin.permission.store');
                Route::get('/{permission}', [UserController::class, 'show'])->name('admin.permission.show');
                Route::get('/{permission}/edit', [PermissionController::class, 'edit'])->name('admin.permission.edit');
                Route::put('/{permission}/edit', [PermissionController::class, 'update'])->name('admin.permission.update');
                Route::delete('/{permission}/delete', [PermissionController::class, 'destroy'])->name('admin.permission.delete');
            }); //end permission route group

            /**
             *
             *
             * ----------------------------------------------------------
             * Profile Management
             * ----------------------------------------------------------
             *
             */
            Route::prefix('profile')->group(function () {
                Route::get('/', [UserController::class, 'profile'])->name('admin.user.profile');
                Route::get('/setting', [UserController::class, 'setting'])->name('admin.user.profile.settings');
                Route::post('/setting', [UserController::class, 'update_setting'])->name('admin.user.profile.settings.update');
            });



            Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
            Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
            Route::post('/create', [UserController::class, 'store'])->name('admin.user.store');
            Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
            Route::put('/{user}/edit', [UserController::class, 'update'])->name('admin.user.update');
            Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('admin.user.delete');
            Route::post('{user}/status-update', [UserController::class, 'statusUpdate'])->name('user.statusUpdate');
        }); //end user route group

        /**
         *
         *
         * ----------------------------------------------------------
         * page-builder Management
         * ----------------------------------------------------------
         *
         */
        Route::prefix('/page-builder')->group(function () {
            Route::get('/', [PageBuilderController::class, 'index'])->name('admin.page-builder.index');
            Route::get('/create', [PageBuilderController::class, 'create'])->name('admin.page-builder.create');
            Route::post('/create', [PageBuilderController::class, 'store'])->name('admin.page-builder.store');
            Route::get('/{pageBuilder}/edit', [PageBuilderController::class, 'edit'])->name('admin.page-builder.edit');
            Route::put('/{pageBuilder}/edit', [PageBuilderController::class, 'update'])->name('admin.page-builder.update');
            Route::delete('/{pageBuilder}/delete', [PageBuilderController::class, 'destroy'])->name('admin.page-builder.delete');
        }); //end  page-builder route group

        /**
         *
         *
         * ----------------------------------------------------------
         * Report Issue Management
         * ----------------------------------------------------------
         *
         */
        Route::prefix('/report-issue')->group(function () {
            Route::get('/', [ReportIssueController::class, 'index'])->name('admin.report-issue.index');
            Route::get('/create', [ReportIssueController::class, 'create'])->name('admin.report-issue.create');
            Route::post('/create', [ReportIssueController::class, 'store'])->name('admin.report-issue.store');
            Route::get('/{reportIssue}', [ReportIssueController::class, 'show'])->name('admin.report-issue.show');
            Route::get('/{reportIssue}/edit', [ReportIssueController::class, 'edit'])->name('admin.report-issue.edit');
            Route::put('/{reportIssue}/edit', [ReportIssueController::class, 'update'])->name('admin.report-issue.update');
            Route::delete('/{reportIssue}/delete', [ReportIssueController::class, 'destroy'])->name('admin.report-issue.delete');
        });

        /**
         *
         *
         * ----------------------------------------------------------
         * Settings Management
         * ----------------------------------------------------------
         *
         */
        Route::prefix('settings')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('admin.settings.index');
            Route::get('/{setting}/move-up', [SettingController::class, 'move_up'])->name('admin.settings.moveUp');
            Route::get('/{setting}/move-down', [SettingController::class, 'move_down'])->name('admin.settings.moveDown');
            Route::post('/', [SettingController::class, 'store'])->name('admin.settings.store');
            Route::put('/', [SettingController::class, 'update'])->name('admin.settings.update');
            Route::delete('/{setting}/delete', [SettingController::class, 'destroy'])->name('admin.settings.delete');
            Route::get('/{setting}/unset-value', [SettingController::class, 'unsetValue'])->name('admin.settings.unsetValue');
        }); //end settings group



    }); //end auth route group
});//end admin Subdomain group
