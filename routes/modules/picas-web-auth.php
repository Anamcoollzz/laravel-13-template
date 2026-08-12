
<?php

use App\Http\Controllers\PicaController;
use Illuminate\Support\Facades\Route;

// Pica Module Routes
Route::get('yajra-picas', [PicaController::class, 'index'])->name('picas.index-yajra');
Route::get('yajra-picas/ajax', [PicaController::class, 'yajraAjax'])->name('picas.ajax-yajra');
Route::get('ajax-picas', [PicaController::class, 'index'])->name('picas.index-ajax');
Route::get('yajra-ajax-picas', [PicaController::class, 'index'])->name('picas.index-ajax-yajra');
Route::get('picas/pdf', [PicaController::class, 'exportPdf'])->name('picas.pdf');
Route::get('picas/csv', [PicaController::class, 'exportCsv'])->name('picas.csv');
Route::get('picas/excel', [PicaController::class, 'exportExcel'])->name('picas.excel');
Route::get('picas/json', [PicaController::class, 'exportJson'])->name('picas.json');
Route::get('picas/import-excel-example', [PicaController::class, 'importExcelExample'])->name('picas.import-excel-example');
Route::post('picas/import-excel', [PicaController::class, 'importExcel'])->name('picas.import-excel');
Route::post('picas/duplicate/{pica}', [PicaController::class, 'duplicate'])->name('picas.duplicate');
Route::put('picas/restore/{pica}', [PicaController::class, 'restore'])->name('picas.restore');
Route::put('picas/restore-all', [PicaController::class, 'restoreAll'])->name('picas.restore-all');
Route::delete('picas/force-delete/{pica}', [PicaController::class, 'forceDelete'])->name('picas.force-delete');
Route::delete('picas/force-delete-all', [PicaController::class, 'forceDeleteAll'])->name('picas.force-delete-all');
Route::get('picas', [PicaController::class, 'indexData'])->name('picas.index');
Route::get('picas/create', [PicaController::class, 'createData'])->name('picas.create');
Route::post('picas', [PicaController::class, 'storeData'])->name('picas.store');
Route::get('picas/{pica}', [PicaController::class, 'showData'])->name('picas.show');
Route::get('picas-single-pdf/{pica}', [PicaController::class, 'singlePdf'])->name('picas.single-pdf');
Route::get('picas/{pica}/edit', [PicaController::class, 'editData'])->name('picas.edit');
Route::get('picas/{pica}/on-progress-edit', [PicaController::class, 'editData'])->name('picas.on-progress-edit');
Route::get('picas/{pica}/approval-edit', [PicaController::class, 'editData'])->name('picas.approval-edit');
Route::get('picas/{pica}/form-approval', [PicaController::class, 'editData'])->name('picas.form-approval');
Route::put('picas/{pica}', [PicaController::class, 'updateData'])->name('picas.update');
Route::put('picas/{pica}/update', [PicaController::class, 'updateData'])->name('picas.update2');
Route::delete('picas/{pica}', [PicaController::class, 'destroyData'])->name('picas.destroy');
Route::delete('picas-using-checkbox', [PicaController::class, 'destroyUsingCheckbox'])->name('picas.destroy-using-checkbox');
Route::delete('picas-truncate', [PicaController::class, 'truncate'])->name('picas.truncate');
Route::get('on-progress-picas', [PicaController::class, 'indexData'])->name('picas.on-progress');
Route::get('done-picas', [PicaController::class, 'indexData'])->name('picas.done');
Route::get('action-needed-picas', [PicaController::class, 'indexData'])->name('picas.action-needed');
// Route::resource('picas', \App\Http\Controllers\PicaController::class);
// route
