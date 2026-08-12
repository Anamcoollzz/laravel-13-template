
<?php

use App\Http\Controllers\PocariFunctionController;
use Illuminate\Support\Facades\Route;

// Function Module Routes
Route::get('yajra-pocari-functions', [PocariFunctionController::class, 'index'])->name('pocari-functions.index-yajra');
Route::get('yajra-pocari-functions/ajax', [PocariFunctionController::class, 'yajraAjax'])->name('pocari-functions.ajax-yajra');
Route::get('ajax-pocari-functions', [PocariFunctionController::class, 'index'])->name('pocari-functions.index-ajax');
Route::get('yajra-ajax-pocari-functions', [PocariFunctionController::class, 'index'])->name('pocari-functions.index-ajax-yajra');
Route::get('pocari-functions/pdf', [PocariFunctionController::class, 'exportPdf'])->name('pocari-functions.pdf');
Route::get('pocari-functions/csv', [PocariFunctionController::class, 'exportCsv'])->name('pocari-functions.csv');
Route::get('pocari-functions/excel', [PocariFunctionController::class, 'exportExcel'])->name('pocari-functions.excel');
Route::get('pocari-functions/json', [PocariFunctionController::class, 'exportJson'])->name('pocari-functions.json');
Route::get('pocari-functions/import-excel-example', [PocariFunctionController::class, 'importExcelExample'])->name('pocari-functions.import-excel-example');
Route::post('pocari-functions/import-excel', [PocariFunctionController::class, 'importExcel'])->name('pocari-functions.import-excel');
Route::post('pocari-functions/duplicate/{pocari_function}', [PocariFunctionController::class, 'duplicate'])->name('pocari-functions.duplicate');
Route::put('pocari-functions/restore/{pocari_function}', [PocariFunctionController::class, 'restore'])->name('pocari-functions.restore');
Route::put('pocari-functions/restore-all', [PocariFunctionController::class, 'restoreAll'])->name('pocari-functions.restore-all');
Route::delete('pocari-functions/force-delete/{pocari_function}', [PocariFunctionController::class, 'forceDelete'])->name('pocari-functions.force-delete');
Route::delete('pocari-functions/force-delete-all', [PocariFunctionController::class, 'forceDeleteAll'])->name('pocari-functions.force-delete-all');
Route::get('pocari-functions', [PocariFunctionController::class, 'indexData'])->name('pocari-functions.index');
Route::get('pocari-functions/create', [PocariFunctionController::class, 'createData'])->name('pocari-functions.create');
Route::post('pocari-functions', [PocariFunctionController::class, 'storeData'])->name('pocari-functions.store');
Route::get('pocari-functions/{pocari_function}', [PocariFunctionController::class, 'showData'])->name('pocari-functions.show');
Route::get('pocari-functions-single-pdf/{pocari_function}', [PocariFunctionController::class, 'singlePdf'])->name('pocari-functions.single-pdf');
Route::get('pocari-functions/{pocari_function}/edit', [PocariFunctionController::class, 'editData'])->name('pocari-functions.edit');
Route::put('pocari-functions/{pocari_function}', [PocariFunctionController::class, 'updateData'])->name('pocari-functions.update');
Route::delete('pocari-functions/{pocari_function}', [PocariFunctionController::class, 'destroyData'])->name('pocari-functions.destroy');
Route::delete('pocari-functions-using-checkbox', [PocariFunctionController::class, 'destroyUsingCheckbox'])->name('pocari-functions.destroy-using-checkbox');
Route::delete('pocari-functions-truncate', [PocariFunctionController::class, 'truncate'])->name('pocari-functions.truncate');
// Route::resource('pocari-functions', \App\Http\Controllers\PocariFunctionController::class);
// route
