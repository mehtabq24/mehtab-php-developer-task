<?php



// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\EnquiryController;
// use App\Http\Controllers\Auth\LoginController;

// Route::prefix('actal')->name('admin.')->group(function () {

//     // Custom login routes for admin
//     Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [LoginController::class, 'login']);
//     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//     // Admin dashboard + protected routes
//     Route::middleware(['auth', 'is_admin'])->group(function () {
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('dashboard');

//         Route::resource('enquiries', EnquiryController::class)->only(['index', 'show']);
//         Route::post('enquiries/{enquiry}/status', [EnquiryController::class, 'updateStatus'])->name('enquiries.update-status');
//     });
// });

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CartController;


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/admin/products/upload', [ProductController::class, 'upload'])->name('admin.products.upload');

Route::prefix('admin')
    ->middleware(['auth', 'is_admin']) // <-- combine in one line
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('products', ProductController::class);
        Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    });
