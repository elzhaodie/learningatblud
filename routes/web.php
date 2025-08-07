<?php
use App\Http\Controllers\BidangController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\TimPenilaiController;
use App\Http\Controllers\DaerahController;

// Default laravel page
Route::get('/', function () {
    return view('welcome');
});
    
Route::get('/login', function () {
    return view('admin.pages.login');
})->name('login');

Route::get('/register', function () {
    return view('admin.pages.register');
})->name('register');

// Admin Dashboard Route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    // Route for bidang management
    Route::get('/bidang', [BidangController::class, 'index'])->name('bidang');
    Route::post('/insertbidangbaru', [BidangController::class, 'store'])
            ->name('insertbidangbaru.store');
    Route::get('/insertbidang', function () {
        return view('admin.pages.insertbidang');
    })->name('insertbidang');
    Route::get('/admin/bidang/{id}/edit', [BidangController::class, 'edit'])->name('bidang.edit');
    Route::put('/admin/bidang/{id}', [BidangController::class, 'update'])->name('bidang.update');

    // Route for nilai management
    Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai');

    // Route for tim penilai management
    Route::get('/timpenilai', [TimPenilaiController::class, 'index'])->name('timpenilai');
    Route::get('/admin/timpenilai/{id}/edit', [TimPenilaiController::class, 'edit'])->name('timpenilai.edit');
    Route::put('/admin/timpenilai/{id}', [TimPenilaiController::class, 'update'])->name('timpenilai.update');

    // Route for daerah management
    Route::get('/daerah', [DaerahController::class, 'index'])->name('daerah');
    Route::get('/insertdaerah', function () {
        return view('admin.pages.insertdaerah');
    })->name('insertdaerah');
    Route::post('/insertdaerah', [DaerahController::class, 'store'])
            ->name('insertdaerah.store');
    Route::get('/admin/daerah/{id}/edit', [DaerahController::class, 'edit'])->name('daerah.edit');
    Route::put('/admin/daerah/{id}', [DaerahController::class, 'update'])->name('daerah.update');

    // Additional admin pages
    Route::get('/insertdaerah', function () {
        return view('admin.pages.insertdaerah');
    })->name('insertdaerah');

    Route::get('/alerts', function () {
        return view('admin.pages.alerts');
    })->name('alerts');

    Route::get('/buttons', function () {
        return view('admin.pages.buttons');
    })->name('buttons');

    Route::get('/dropdowns', function () {
        return view('admin.pages.dropdowns');
    })->name('dropdowns');

    Route::get('/modals', function () {
        return view('admin.pages.modals');
    })->name('modals');

    Route::get('/popovers', function () {
        return view('admin.pages.popovers');
    })->name('popovers');

    Route::get('/progress-bars', function () {
        return view('admin.pages.progress-bars');
    })->name('progress-bars');

    Route::get('/forms-basic', function () {
        return view('admin.pages.forms-basic');
    })->name('forms-basic');

    Route::get('/forms-advanced', function () {
        return view('admin.pages.forms-advanced');
    })->name('forms-advanced');

    Route::get('/simple-table', function () {
        return view('admin.pages.simple-table');
    })->name('simple-table');

    Route::get('/datatables', function () {
        return view('admin.pages.datatables');
    })->name('datatables');

    Route::get('/ui-colours', function () {
        return view('admin.pages.ui-colours');
    })->name('ui-colours');

    Route::get('/404', function () {
        return view('admin.pages.404');
    })->name('404');

    Route::get('/blank-page', function () {
        return view('admin.pages.blank-page');
    })->name('blank-page');

    Route::get('/charts', function () {
        return view('admin.pages.charts');
    })->name('charts');
});