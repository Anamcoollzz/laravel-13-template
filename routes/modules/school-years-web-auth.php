
<?php

use App\Http\Controllers\SchoolYearController;
use Illuminate\Support\Facades\Route;

// Tahun Pelajaran Module Routes
Route::get('yajra-school-years', [SchoolYearController::class, 'index'])->name('school-years.index-yajra');
Route::get('yajra-school-years/ajax', [SchoolYearController::class, 'yajraAjax'])->name('school-years.ajax-yajra');
Route::get('ajax-school-years', [SchoolYearController::class, 'index'])->name('school-years.index-ajax');
Route::get('yajra-ajax-school-years', [SchoolYearController::class, 'index'])->name('school-years.index-ajax-yajra');
Route::get('school-years/pdf', [SchoolYearController::class, 'exportPdf'])->name('school-years.pdf');
Route::get('school-years/csv', [SchoolYearController::class, 'exportCsv'])->name('school-years.csv');
Route::get('school-years/excel', [SchoolYearController::class, 'exportExcel'])->name('school-years.excel');
Route::get('school-years/json', [SchoolYearController::class, 'exportJson'])->name('school-years.json');
Route::get('school-years/import-excel-example', [SchoolYearController::class, 'importExcelExample'])->name('school-years.import-excel-example');
Route::post('school-years/import-excel', [SchoolYearController::class, 'importExcel'])->name('school-years.import-excel');
Route::post('school-years/duplicate/{school_year}', [SchoolYearController::class, 'duplicate'])->name('school-years.duplicate');
Route::put('school-years/restore/{school_year}', [SchoolYearController::class, 'restore'])->name('school-years.restore');
Route::put('school-years/restore-all', [SchoolYearController::class, 'restoreAll'])->name('school-years.restore-all');
Route::delete('school-years/force-delete/{school_year}', [SchoolYearController::class, 'forceDelete'])->name('school-years.force-delete');
Route::delete('school-years/force-delete-all', [SchoolYearController::class, 'forceDeleteAll'])->name('school-years.force-delete-all');
Route::get('school-years', [SchoolYearController::class, 'indexData'])->name('school-years.index');
Route::get('school-years/create', [SchoolYearController::class, 'createData'])->name('school-years.create');
Route::post('school-years', [SchoolYearController::class, 'storeData'])->name('school-years.store');
Route::get('school-years/{school_year}', [SchoolYearController::class, 'showData'])->name('school-years.show');
Route::get('school-years/{school_year}/edit', [SchoolYearController::class, 'editData'])->name('school-years.edit');
Route::put('school-years/{school_year}', [SchoolYearController::class, 'updateData'])->name('school-years.update');
Route::delete('school-years/{school_year}', [SchoolYearController::class, 'destroyData'])->name('school-years.destroy');
// Route::resource('school-years', \App\Http\Controllers\SchoolYearController::class);
// route
