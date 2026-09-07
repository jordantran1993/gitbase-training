<?php

use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin Portal Routes for FAQ Management
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', '/admin/faqs');
    Route::resource('faq-categories', FaqCategoryController::class)->except(['create', 'show', 'edit']);
    Route::resource('faqs', FaqController::class)->except(['create', 'show', 'edit']);
});
