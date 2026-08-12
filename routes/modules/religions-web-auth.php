
<?php

use App\Http\Controllers\ReligionController;
use Illuminate\Support\Facades\Route;

// Agama Module Routes
Route::get('yajra-religions', [ReligionController::class, 'index'])->name('religions.index-yajra');
Route::get('yajra-religions/ajax', [ReligionController::class, 'yajraAjax'])->name('religions.ajax-yajra');
Route::get('ajax-religions', [ReligionController::class, 'index'])->name('religions.index-ajax');
Route::get('yajra-ajax-religions', [ReligionController::class, 'index'])->name('religions.index-ajax-yajra');
Route::get('religions/pdf', [ReligionController::class, 'exportPdf'])->name('religions.pdf');
Route::get('religions/csv', [ReligionController::class, 'exportCsv'])->name('religions.csv');
Route::get('religions/excel', [ReligionController::class, 'exportExcel'])->name('religions.excel');
Route::get('religions/json', [ReligionController::class, 'exportJson'])->name('religions.json');
Route::get('religions/import-excel-example', [ReligionController::class, 'importExcelExample'])->name('religions.import-excel-example');
Route::post('religions/import-excel', [ReligionController::class, 'importExcel'])->name('religions.import-excel');
Route::post('religions/duplicate/{religion}', [ReligionController::class, 'duplicate'])->name('religions.duplicate');
Route::put('religions/restore/{religion}', [ReligionController::class, 'restore'])->name('religions.restore');
Route::put('religions/restore-all', [ReligionController::class, 'restoreAll'])->name('religions.restore-all');
Route::delete('religions/force-delete/{religion}', [ReligionController::class, 'forceDelete'])->name('religions.force-delete');
Route::delete('religions/force-delete-all', [ReligionController::class, 'forceDeleteAll'])->name('religions.force-delete-all');
Route::get('religions', [ReligionController::class, 'indexData'])->name('religions.index');
Route::get('religions/create', [ReligionController::class, 'createData'])->name('religions.create');
Route::post('religions', [ReligionController::class, 'storeData'])->name('religions.store');
Route::get('religions/{religion}', [ReligionController::class, 'showData'])->name('religions.show');
Route::get('religions/{religion}/edit', [ReligionController::class, 'editData'])->name('religions.edit');
Route::put('religions/{religion}', [ReligionController::class, 'updateData'])->name('religions.update');
Route::delete('religions/{religion}', [ReligionController::class, 'destroyData'])->name('religions.destroy');
// Route::resource('religions', \App\Http\Controllers\ReligionController::class);
// route
