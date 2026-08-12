
<?php

use App\Http\Controllers\FocusItemController;
use Illuminate\Support\Facades\Route;

// Focus Item Module Routes
Route::get('yajra-focus-items', [FocusItemController::class, 'index'])->name('focus-items.index-yajra');
Route::get('yajra-focus-items/ajax', [FocusItemController::class, 'yajraAjax'])->name('focus-items.ajax-yajra');
Route::get('ajax-focus-items', [FocusItemController::class, 'index'])->name('focus-items.index-ajax');
Route::get('yajra-ajax-focus-items', [FocusItemController::class, 'index'])->name('focus-items.index-ajax-yajra');
Route::get('focus-items/pdf', [FocusItemController::class, 'exportPdf'])->name('focus-items.pdf');
Route::get('focus-items/csv', [FocusItemController::class, 'exportCsv'])->name('focus-items.csv');
Route::get('focus-items/excel', [FocusItemController::class, 'exportExcel'])->name('focus-items.excel');
Route::get('focus-items/json', [FocusItemController::class, 'exportJson'])->name('focus-items.json');
Route::get('focus-items/import-excel-example', [FocusItemController::class, 'importExcelExample'])->name('focus-items.import-excel-example');
Route::post('focus-items/import-excel', [FocusItemController::class, 'importExcel'])->name('focus-items.import-excel');
Route::post('focus-items/duplicate/{focus_item}', [FocusItemController::class, 'duplicate'])->name('focus-items.duplicate');
Route::put('focus-items/restore/{focus_item}', [FocusItemController::class, 'restore'])->name('focus-items.restore');
Route::put('focus-items/restore-all', [FocusItemController::class, 'restoreAll'])->name('focus-items.restore-all');
Route::delete('focus-items/force-delete/{focus_item}', [FocusItemController::class, 'forceDelete'])->name('focus-items.force-delete');
Route::delete('focus-items/force-delete-all', [FocusItemController::class, 'forceDeleteAll'])->name('focus-items.force-delete-all');
Route::get('focus-items', [FocusItemController::class, 'indexData'])->name('focus-items.index');
Route::get('focus-items/create', [FocusItemController::class, 'createData'])->name('focus-items.create');
Route::post('focus-items', [FocusItemController::class, 'storeData'])->name('focus-items.store');
Route::get('focus-items/{focus_item}', [FocusItemController::class, 'showData'])->name('focus-items.show');
Route::get('focus-items-single-pdf/{focus_item}', [FocusItemController::class, 'singlePdf'])->name('focus-items.single-pdf');
Route::get('focus-items/{focus_item}/edit', [FocusItemController::class, 'editData'])->name('focus-items.edit');
Route::put('focus-items/{focus_item}', [FocusItemController::class, 'updateData'])->name('focus-items.update');
Route::delete('focus-items/{focus_item}', [FocusItemController::class, 'destroyData'])->name('focus-items.destroy');
Route::delete('focus-items-using-checkbox', [FocusItemController::class, 'destroyUsingCheckbox'])->name('focus-items.destroy-using-checkbox');
Route::delete('focus-items-truncate', [FocusItemController::class, 'truncate'])->name('focus-items.truncate');
// Route::resource('focus-items', \App\Http\Controllers\FocusItemController::class);
// route
