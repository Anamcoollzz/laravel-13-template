
<?php

use App\Http\Controllers\SemesterController;
use Illuminate\Support\Facades\Route;

// Semester Module Routes
Route::get('yajra-semesters', [SemesterController::class, 'index'])->name('semesters.index-yajra');
Route::get('yajra-semesters/ajax', [SemesterController::class, 'yajraAjax'])->name('semesters.ajax-yajra');
Route::get('ajax-semesters', [SemesterController::class, 'index'])->name('semesters.index-ajax');
Route::get('yajra-ajax-semesters', [SemesterController::class, 'index'])->name('semesters.index-ajax-yajra');
Route::get('semesters/pdf', [SemesterController::class, 'exportPdf'])->name('semesters.pdf');
Route::get('semesters/csv', [SemesterController::class, 'exportCsv'])->name('semesters.csv');
Route::get('semesters/excel', [SemesterController::class, 'exportExcel'])->name('semesters.excel');
Route::get('semesters/json', [SemesterController::class, 'exportJson'])->name('semesters.json');
Route::get('semesters/import-excel-example', [SemesterController::class, 'importExcelExample'])->name('semesters.import-excel-example');
Route::post('semesters/import-excel', [SemesterController::class, 'importExcel'])->name('semesters.import-excel');
Route::post('semesters/duplicate/{semester}', [SemesterController::class, 'duplicate'])->name('semesters.duplicate');
Route::put('semesters/restore/{semester}', [SemesterController::class, 'restore'])->name('semesters.restore');
Route::put('semesters/restore-all', [SemesterController::class, 'restoreAll'])->name('semesters.restore-all');
Route::delete('semesters/force-delete/{semester}', [SemesterController::class, 'forceDelete'])->name('semesters.force-delete');
Route::delete('semesters/force-delete-all', [SemesterController::class, 'forceDeleteAll'])->name('semesters.force-delete-all');
Route::get('semesters', [SemesterController::class, 'indexData'])->name('semesters.index');
Route::get('semesters/create', [SemesterController::class, 'createData'])->name('semesters.create');
Route::post('semesters', [SemesterController::class, 'storeData'])->name('semesters.store');
Route::get('semesters/{semester}', [SemesterController::class, 'showData'])->name('semesters.show');
Route::get('semesters/{semester}/edit', [SemesterController::class, 'editData'])->name('semesters.edit');
Route::put('semesters/{semester}', [SemesterController::class, 'updateData'])->name('semesters.update');
Route::delete('semesters/{semester}', [SemesterController::class, 'destroyData'])->name('semesters.destroy');
// Route::resource('semesters', \App\Http\Controllers\SemesterController::class);
// route
