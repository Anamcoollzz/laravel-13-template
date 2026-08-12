
<?php

use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

// Status Module Routes
Route::get('yajra-statuses', [StatusController::class, 'index'])->name('statuses.index-yajra');
Route::get('yajra-statuses/ajax', [StatusController::class, 'yajraAjax'])->name('statuses.ajax-yajra');
Route::get('ajax-statuses', [StatusController::class, 'index'])->name('statuses.index-ajax');
Route::get('yajra-ajax-statuses', [StatusController::class, 'index'])->name('statuses.index-ajax-yajra');
Route::get('statuses/pdf', [StatusController::class, 'exportPdf'])->name('statuses.pdf');
Route::get('statuses/csv', [StatusController::class, 'exportCsv'])->name('statuses.csv');
Route::get('statuses/excel', [StatusController::class, 'exportExcel'])->name('statuses.excel');
Route::get('statuses/json', [StatusController::class, 'exportJson'])->name('statuses.json');
Route::get('statuses/import-excel-example', [StatusController::class, 'importExcelExample'])->name('statuses.import-excel-example');
Route::post('statuses/import-excel', [StatusController::class, 'importExcel'])->name('statuses.import-excel');
Route::post('statuses/duplicate/{status}', [StatusController::class, 'duplicate'])->name('statuses.duplicate');
Route::put('statuses/restore/{status}', [StatusController::class, 'restore'])->name('statuses.restore');
Route::put('statuses/restore-all', [StatusController::class, 'restoreAll'])->name('statuses.restore-all');
Route::delete('statuses/force-delete/{status}', [StatusController::class, 'forceDelete'])->name('statuses.force-delete');
Route::delete('statuses/force-delete-all', [StatusController::class, 'forceDeleteAll'])->name('statuses.force-delete-all');
Route::get('statuses', [StatusController::class, 'indexData'])->name('statuses.index');
Route::get('statuses/create', [StatusController::class, 'createData'])->name('statuses.create');
Route::post('statuses', [StatusController::class, 'storeData'])->name('statuses.store');
Route::get('statuses/{status}', [StatusController::class, 'showData'])->name('statuses.show');
Route::get('statuses-single-pdf/{status}', [StatusController::class, 'singlePdf'])->name('statuses.single-pdf');
Route::get('statuses/{status}/edit', [StatusController::class, 'editData'])->name('statuses.edit');
Route::put('statuses/{status}', [StatusController::class, 'updateData'])->name('statuses.update');
Route::delete('statuses/{status}', [StatusController::class, 'destroyData'])->name('statuses.destroy');
Route::delete('statuses-using-checkbox', [StatusController::class, 'destroyUsingCheckbox'])->name('statuses.destroy-using-checkbox');
Route::delete('statuses-truncate', [StatusController::class, 'truncate'])->name('statuses.truncate');
// Route::resource('statuses', \App\Http\Controllers\StatusController::class);
// route
