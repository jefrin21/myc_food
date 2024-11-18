<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KonfirmasiOrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WeeklyController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


// ================================================================route backend =======================================
Route::get('/', function () {
    return view('components.backend.index');
});

Route::get('/calendar', function () {
    return view('components.backend.calendar');
});
Route::get('/form-advanced', function () {
    return view('components.backend.form-advanced');
});
Route::get('/form-editors', function () {
    return view('components.backend.form-editors');
});
Route::get('/form-elements', function () {
    return view('components.backend.form-elements');
});
Route::get('/form-mask', function () {
    return view('components.backend.form-mask');
});
Route::get('/form-summernote', function () {
    return view('components.backend.form-summernote');
});
Route::get('/form-uploads', function () {
    return view('components.backend.form-uploads');
});
Route::get('/form-validation', function () {
    return view('components.backend.form-validation');
});
Route::get('/form-xeditable', function () {
    return view('components.backend.form-x
    editable');
});
Route::get('/pages-lock-screen', function () {
    return view('components.backend.pages-lock-screen');
});
Route::get('/pages-login', function () {
    return view('components.backend.pages-login');
});
Route::get('/pages-recoverpw', function () {
    return view('components.backend.pages-recoverpw');
});
Route::get('/pages-register', function () {
    return view('components.backend.pages-register');
});
Route::get('/tables-basic', function () {
    return view('components.backend.tables-basic');
});
Route::get('/tables-datatable', function () {
    return view('components.backend.tables-datatable');
});
Route::get('/tables-editable', function () {
    return view('components.backend.tables-editable');
});
Route::get('/tables-detailorder-pesanan', function () {
    return view('components.backend.tables-detailorder-pesanan');
});

Route::get('/tables-responsive', function () {
    return view('components.backend.tables-responsive');
});

Route::get('/invoiceback', function () {
    return view('components.backend.invoice');
});

Route::get('/tables-datatable-pesanan',[OrderController::class,'index'])->name('tables-datatable-pesanan');
Route::get('/order-details/{id}',[OrderController::class,'detailsOrder']);
Route::get('/detail-order/{id}',[DetailOrderController::class,'detailOrder']);
Route::get('/tables-story-pesanan',[OrderController::class,'storyPesanan']);
Route::get('/konfirmasi-order/{id}',[KonfirmasiOrderController::class,'konfirmasi']);


Route::get('/tables-datatable-weekly',[WeeklyController::class,'index']);





// ================================================================== end route backend =================================


// ================================================================== routes frondend ===================================

Route::get('/home', function () {
    return view('components.frontend.mycindex');
})->name('home');

Route::get('/account', function () {
    return view('components.frontend.mycaccount');
})->name('login');

Route::get('/cart', function () {
    return view('components.frontend.myccart');
})->middleware('auth');

Route::get('/checkout', function () {
    return view('components.frontend.myccheckout');
});

Route::get('/about', function () {
    return view('components.frontend.mycabout');
});

Route::get('/invoice', function () {
    return view('components.frontend.mycinvoice');
});

// Route::get('/login', function () {
//     return view('components.frontend.myclogin');
// })->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('components.frontend.mycregister');
});

Route::get('/orders', function () {
    return view('components.frontend.mycorders');
})->middleware('auth');
// ================================================================== routes frondend ===================================


Route::post('/mylogin',[LoginController::class,'authentication']);
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/myregister',[RegisterController::class,'store']);
Route::resource('/edit',EditController::class);
Route::get('/history', [HistoryController::class, 'showhistory'])->middleware('auth')->name('history');


// =====================================================================================================================

Route::post('/addToCart',[CartController::class,'addtocart']);
Route::get('/cart', [CartController::class, 'showcart'])->middleware('auth');
Route::delete('/hapuscart/{id}',[CartController::class,'hapuscart']);
Route::post('/checkout',[CartController::class,'pagecheckout']);
Route::post('/confirmorder',[CartController::class,'confirm']);



// =================================================================================================================

Route::put('/editprofile/{id}',[EditController::class,'update']);