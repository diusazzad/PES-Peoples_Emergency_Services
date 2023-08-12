<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use Inertia\Inertia;

// Route::get('/register', function () {
//     return Inertia::render('RegistrationPage', [
//         'user' => Auth::user(), // Provide any data you need for the registration page
//     ]);
// });

// Route::get('/', function () {
//     return \Inertia\Inertia::render('Home');
// });


Route::get('/', [ContentController::class, 'welcome'])->name('home');
// // SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::middleware('web')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // User routes
    Route::middleware(['auth', 'role:user'])->group(function () {
        // User Dashboard
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
        Route::resource('/user/tasks', TaskController::class);
        Route::resource('/user/fitness', FitnessController::class);
    });

    // Admin routes
    Route::middleware(['auth', 'role:admin'])->group(function () {
        // Admin Dashboard
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Assign Role
        Route::post('/admin/dashboard/assign-role/{user}', [AdminController::class, 'assignRoleToUser'])
            ->name('admin.users.assign-role');
        // Show Users
        Route::get('/admin/dashboard/role', [AdminController::class, 'roles'])->name('admin.dashboard.roles');
        // Post
        Route::get('/admin/dashboard/post', [AdminController::class, 'postDashboard'])->name('admin.post.dashboard');
        Route::post('/admin/dashboard/upload', [AdminController::class, 'postUpload'])->name('admin.post.upload');

        Route::get('/admin/reviews/{post}/edit', [ContentController::class, 'edit'])->name('admin.reviews.edit');
        Route::put('/admin/reviews/{post}', [ContentController::class, 'update'])->name('admin.reviews.update');
        Route::delete('/admin/reviews/{post}', [ContentController::class, 'destroy'])->name('admin.reviews.destroy');

    });

    // Editor routes
    Route::middleware(['auth', 'role:editor'])->group(function () {
        // Editor Dashboard
        Route::get('/editor/dashboard', [EditorController::class, 'dashboard'])->name('editor.dashboard');
        // Add more editor-specific routes here
    });

    // Superadmin routes
    Route::middleware(['auth', 'role:superadmin'])->group(function () {
        // Superadmin Dashboard
        Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
        // Add more superadmin-specific routes here
    });

});
