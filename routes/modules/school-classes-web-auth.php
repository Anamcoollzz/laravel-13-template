
<?php

use App\Http\Controllers\SchoolClassController;
use Illuminate\Support\Facades\Route;

// Kelas Module Routes
Route::get('yajra-school-classes', [SchoolClassController::class, 'index'])->name('school-classes.index-yajra');
Route::get('yajra-school-classes/ajax', [SchoolClassController::class, 'yajraAjax'])->name('school-classes.ajax-yajra');
Route::get('ajax-school-classes', [SchoolClassController::class, 'index'])->name('school-classes.index-ajax');
Route::get('yajra-ajax-school-classes', [SchoolClassController::class, 'index'])->name('school-classes.index-ajax-yajra');
Route::get('school-classes/pdf', [SchoolClassController::class, 'exportPdf'])->name('school-classes.pdf');
Route::get('school-classes/csv', [SchoolClassController::class, 'exportCsv'])->name('school-classes.csv');
Route::get('school-classes/excel', [SchoolClassController::class, 'exportExcel'])->name('school-classes.excel');
Route::get('school-classes/json', [SchoolClassController::class, 'exportJson'])->name('school-classes.json');
Route::get('school-classes/import-excel-example', [SchoolClassController::class, 'importExcelExample'])->name('school-classes.import-excel-example');
Route::post('school-classes/import-excel', [SchoolClassController::class, 'importExcel'])->name('school-classes.import-excel');
Route::post('school-classes/duplicate/{school_class}', [SchoolClassController::class, 'duplicate'])->name('school-classes.duplicate');
Route::put('school-classes/restore/{school_class}', [SchoolClassController::class, 'restore'])->name('school-classes.restore');
Route::put('school-classes/restore-all', [SchoolClassController::class, 'restoreAll'])->name('school-classes.restore-all');
Route::delete('school-classes/force-delete/{school_class}', [SchoolClassController::class, 'forceDelete'])->name('school-classes.force-delete');
Route::delete('school-classes/force-delete-all', [SchoolClassController::class, 'forceDeleteAll'])->name('school-classes.force-delete-all');
Route::get('school-classes', [SchoolClassController::class, 'indexData'])->name('school-classes.index');
Route::get('school-classes/create', [SchoolClassController::class, 'createData'])->name('school-classes.create');
Route::post('school-classes', [SchoolClassController::class, 'storeData'])->name('school-classes.store');
Route::get('school-classes/{school_class}', [SchoolClassController::class, 'showData'])->name('school-classes.show');
Route::get('school-classes/{school_class}/edit', [SchoolClassController::class, 'editData'])->name('school-classes.edit');
Route::put('school-classes/{school_class}', [SchoolClassController::class, 'updateData'])->name('school-classes.update');
Route::delete('school-classes/{school_class}', [SchoolClassController::class, 'destroyData'])->name('school-classes.destroy');
// Route::resource('school-classes', \App\Http\Controllers\SchoolClassController::class);
// route
