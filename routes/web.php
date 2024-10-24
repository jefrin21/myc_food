<?php

use App\Http\Controllers\OrderController;
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
Route::get('/tables-responsive', function () {
    return view('components.backend.tables-responsive');
});
Route::get('/tables-datatable-pesanan',[OrderController::class,'index']);
Route::get('/tables-datatable-pesanan',[OrderController::class,'update']);


// ================================================================== end route backend =================================