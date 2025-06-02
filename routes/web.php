<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\KadaluarsaController;




Route::get('/', [CarouselController::class, 'index'])->name('landingPage');

// // Group Routes Admin
// Route::get('/AdminMenu', function(){
//     return view('admin.adminMenu');
// })->name('adminMenu');

// Route::get('/Login', function(){
//     return view('admin.login');
// })->name('login');

// Route::get('/CRUDObat', function(){
//     return view('admin.CRUDObat');
// })->name('CRUDObat');

Route::get('/Login', [AdminController::class, 'tampilLogin'])->name('login');
Route::post('/Login/Submit', [AdminController::class, 'submitLogin'])->name('login.submit');
Route::post('/Logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    //Group Routes Admin
    Route::get('/AdminMenu', function(){
        return view('admin.adminMenu');
    })->name('adminMenu');

    //  Automatically register routes like CRUDMitra.index, CRUDMitra.create, etc.

    
    Route::put('CRUDMitra/update/{id}', [MitraController::class, 'update'])->name('CRUDMitra.update'); // Custom update route if needed
    // Route::post('api/add-mitra', [MitraController::class, 'store']); // Route to add mitra
    Route::post('/add-mitra', [MitraController::class, 'store'])->name('mitra.store');
    Route::get('get-mitra-data', [MitraController::class, 'index'])->name('CRUDMitra.index'); // Route to get mitra data
    Route::get('/refresh-mitra', [MitraController::class, 'refreshMitra']); // Route to refresh mitra data
    Route::delete('api/delete-mitra/{id}', [MitraController::class, 'destroy'])->name('CRUDMitra.destroy'); // Custom delete route
    
    Route::get('/CRUDObat', [ObatController::class, 'index'])->name('admin.CRUDObat');
    Route::post('/CRUDObat/submit', [ObatController::class, 'store'])->name('admin.CRUDObat.submit');
    Route::put('/obats/{obat}', [ObatController::class, 'update'])->name('admin.CRUDObat.update');
    Route::delete('/obats/{obat}', [ObatController::class, 'destroy'])->name('admin.CRUDObat.destroy');

});


Route::get('/landingPage', [CarouselController::class, 'index'])->name('landingPage');
Route::get('/profil', [MitraController::class, 'getAllData'])->name('mitraKami');
Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan');
Route::get('/tentangObat', [ObatController::class, 'tentang'])->name('tentangObat');




Route::get('/', function () {
    return view('main.landingPage');
});

Route::get('/landingPage', function () {
    return view('main.landingPage');
});

Route::get('/visi-misi', function () {
    return view('main.visi-misi');
})->name('visi-misi');

Route::get('/profil-sekolah', function () {
    return view('main.profil-sekolah');
})->name('profil-sekolah');

Route::get('/ekstrakurikuler', function () {
    return view('main.ekstrakurikuler');
})->name('ekstrakurikuler');

Route::get('/kurikulumdanbiaya', function () {
    return view('main.kurikulumdanbiaya');
})->name('kurikulumdanbiaya');

Route::get('/beranda', function () {
    return view('main.beranda');
})->name('beranda');

Route::get('/pendaftaran', function () {
    return view('main.pendaftaran');
})->name('pendaftaran');





//  Route::get('/mitraKami', function(){
//      return view('main.MitraKami');
// })->name('mitraKami');

// Route::get('/panduan', function(){
//     return view('main.panduan');
// })->name('panduan');



// Route::get('/tentangObat', function(){
//     return view('main.tentangObat');
// })->name('tentangObat');

// Route::get('/tentangObat', function(){
//     return view('main.tentangObat');
// })->name('tentangObat');
