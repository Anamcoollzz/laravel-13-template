
<?php

use App\Http\Controllers\EducationLevelController;
use Illuminate\Support\Facades\Route;

// Jenjang Pendidikan Module Routes
Route::get('yajra-education-levels', [EducationLevelController::class, 'index'])->name('education-levels.index-yajra');
Route::get('yajra-education-levels/ajax', [EducationLevelController::class, 'yajraAjax'])->name('education-levels.ajax-yajra');
Route::get('ajax-education-levels', [EducationLevelController::class, 'index'])->name('education-levels.index-ajax');
Route::get('yajra-ajax-education-levels', [EducationLevelController::class, 'index'])->name('education-levels.index-ajax-yajra');
Route::get('education-levels/pdf', [EducationLevelController::class, 'exportPdf'])->name('education-levels.pdf');
Route::get('education-levels/csv', [EducationLevelController::class, 'exportCsv'])->name('education-levels.csv');
Route::get('education-levels/excel', [EducationLevelController::class, 'exportExcel'])->name('education-levels.excel');
Route::get('education-levels/json', [EducationLevelController::class, 'exportJson'])->name('education-levels.json');
Route::get('education-levels/import-excel-example', [EducationLevelController::class, 'importExcelExample'])->name('education-levels.import-excel-example');
Route::post('education-levels/import-excel', [EducationLevelController::class, 'importExcel'])->name('education-levels.import-excel');
Route::post('education-levels/duplicate/{education_level}', [EducationLevelController::class, 'duplicate'])->name('education-levels.duplicate');
Route::put('education-levels/restore/{education_level}', [EducationLevelController::class, 'restore'])->name('education-levels.restore');
Route::put('education-levels/restore-all', [EducationLevelController::class, 'restoreAll'])->name('education-levels.restore-all');
Route::delete('education-levels/force-delete/{education_level}', [EducationLevelController::class, 'forceDelete'])->name('education-levels.force-delete');
Route::delete('education-levels/force-delete-all', [EducationLevelController::class, 'forceDeleteAll'])->name('education-levels.force-delete-all');
Route::get('education-levels', [EducationLevelController::class, 'indexData'])->name('education-levels.index');
Route::get('education-levels/create', [EducationLevelController::class, 'createData'])->name('education-levels.create');
Route::post('education-levels', [EducationLevelController::class, 'storeData'])->name('education-levels.store');
Route::get('education-levels/{education_level}', [EducationLevelController::class, 'showData'])->name('education-levels.show');
Route::get('education-levels/{education_level}/edit', [EducationLevelController::class, 'editData'])->name('education-levels.edit');
Route::put('education-levels/{education_level}', [EducationLevelController::class, 'updateData'])->name('education-levels.update');
Route::delete('education-levels/{education_level}', [EducationLevelController::class, 'destroyData'])->name('education-levels.destroy');
// Route::resource('education-levels', \App\Http\Controllers\EducationLevelController::class);
// route
