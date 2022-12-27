<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\DataPasienComponent;
use App\Http\Livewire\Admin\Setting\GeneralComponent;
use App\Http\Livewire\Admin\Setting\HeroComponent;
use App\Http\Livewire\Admin\UserListComponent;
use App\Http\Livewire\Edukasi\EdukasiComponent;
use App\Http\Livewire\Edukasi\EdukasiDetailComponent;
use App\Http\Livewire\Faskes\BlogComponen;
use App\Http\Livewire\Faskes\CategoryComponen;
use App\Http\Livewire\LandingPage\HomeComponent;
use App\Http\Livewire\LandingPage\SplashComponent;
use App\Http\Livewire\SuccessComponent;
use App\Http\Livewire\User\DeteksiPneumoniaComponent;
use App\Http\Livewire\User\ProfileComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('splash-component');
});

Route::get('/terdeteksi', SuccessComponent::class)->name('terdeteksi');
Route::get('/home', HomeComponent::class)->name('home');
Route::get('/edukasi', EdukasiComponent::class);
Route::get('/edukasi/detail/{id}', EdukasiDetailComponent::class)->name('detail.edukasi');

Route::middleware('role:admin|user|faskes')->group(function () {
    Route::get('/deteksi-pneumonia', DeteksiPneumoniaComponent::class)->name('screening');
});

Route::middleware('role:admin|faskes')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', DashboardComponent::class)->name('admin.dashboard');
        Route::get('/data-pasien', DataPasienComponent::class)->name('data-pasien');


    });
});

Route::middleware('role:admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/user-list', UserListComponent::class)->name('admin.user-list');
        Route::get('/general', GeneralComponent::class)->name('admin.general');
        Route::get('/slider', HeroComponent::class)->name('admin.slider');
        Route::get('/artikel', BlogComponen::class)->name('admin.news');
        Route::get('/kategori', CategoryComponen::class)->name('admin.kategori');
    });
});


// Route::prefix('pneumonia')->group(function () {
//     Route::prefix('landing')->group(function () {
//         Route::get('/', HomeComponent::class);
//     });
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

require __DIR__.'/auth.php';
