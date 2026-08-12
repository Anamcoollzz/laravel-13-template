
<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Kategori Module Routes
Route::get('yajra-categories', [CategoryController::class, 'index'])->name('categories.index-yajra');
Route::get('yajra-categories/ajax', [CategoryController::class, 'yajraAjax'])->name('categories.ajax-yajra');
Route::get('ajax-categories', [CategoryController::class, 'index'])->name('categories.index-ajax');
Route::get('yajra-ajax-categories', [CategoryController::class, 'index'])->name('categories.index-ajax-yajra');
Route::get('categories/pdf', [CategoryController::class, 'exportPdf'])->name('categories.pdf');
Route::get('categories/csv', [CategoryController::class, 'exportCsv'])->name('categories.csv');
Route::get('categories/excel', [CategoryController::class, 'exportExcel'])->name('categories.excel');
Route::get('categories/json', [CategoryController::class, 'exportJson'])->name('categories.json');
Route::get('categories/import-excel-example', [CategoryController::class, 'importExcelExample'])->name('categories.import-excel-example');
Route::post('categories/import-excel', [CategoryController::class, 'importExcel'])->name('categories.import-excel');
Route::post('categories/duplicate/{category}', [CategoryController::class, 'duplicate'])->name('categories.duplicate');
Route::put('categories/restore/{category}', [CategoryController::class, 'restore'])->name('categories.restore');
Route::put('categories/restore-all', [CategoryController::class, 'restoreAll'])->name('categories.restore-all');
Route::delete('categories/force-delete/{category}', [CategoryController::class, 'forceDelete'])->name('categories.force-delete');
Route::delete('categories/force-delete-all', [CategoryController::class, 'forceDeleteAll'])->name('categories.force-delete-all');
Route::get('categories', [CategoryController::class, 'indexData'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'createData'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'storeData'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'showData'])->name('categories.show');
Route::get('categories-single-pdf/{category}', [CategoryController::class, 'singlePdf'])->name('categories.single-pdf');
Route::get('categories/{category}/edit', [CategoryController::class, 'editData'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'updateData'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroyData'])->name('categories.destroy');
Route::delete('categories-using-checkbox', [CategoryController::class, 'destroyUsingCheckbox'])->name('categories.destroy-using-checkbox');
Route::delete('categories-truncate', [CategoryController::class, 'truncate'])->name('categories.truncate');
// Route::resource('categories', \App\Http\Controllers\CategoryController::class);
// route
