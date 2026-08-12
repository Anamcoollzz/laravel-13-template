
<?php

use App\Http\Controllers\ClassLevelController;
use Illuminate\Support\Facades\Route;

// Level Kelas Module Routes
Route::get('yajra-class-levels', [ClassLevelController::class, 'index'])->name('class-levels.index-yajra');
Route::get('yajra-class-levels/ajax', [ClassLevelController::class, 'yajraAjax'])->name('class-levels.ajax-yajra');
Route::get('ajax-class-levels', [ClassLevelController::class, 'index'])->name('class-levels.index-ajax');
Route::get('yajra-ajax-class-levels', [ClassLevelController::class, 'index'])->name('class-levels.index-ajax-yajra');
Route::get('class-levels/pdf', [ClassLevelController::class, 'exportPdf'])->name('class-levels.pdf');
Route::get('class-levels/csv', [ClassLevelController::class, 'exportCsv'])->name('class-levels.csv');
Route::get('class-levels/excel', [ClassLevelController::class, 'exportExcel'])->name('class-levels.excel');
Route::get('class-levels/json', [ClassLevelController::class, 'exportJson'])->name('class-levels.json');
Route::get('class-levels/import-excel-example', [ClassLevelController::class, 'importExcelExample'])->name('class-levels.import-excel-example');
Route::post('class-levels/import-excel', [ClassLevelController::class, 'importExcel'])->name('class-levels.import-excel');
Route::post('class-levels/duplicate/{class_level}', [ClassLevelController::class, 'duplicate'])->name('class-levels.duplicate');
Route::put('class-levels/restore/{class_level}', [ClassLevelController::class, 'restore'])->name('class-levels.restore');
Route::put('class-levels/restore-all', [ClassLevelController::class, 'restoreAll'])->name('class-levels.restore-all');
Route::delete('class-levels/force-delete/{class_level}', [ClassLevelController::class, 'forceDelete'])->name('class-levels.force-delete');
Route::delete('class-levels/force-delete-all', [ClassLevelController::class, 'forceDeleteAll'])->name('class-levels.force-delete-all');
Route::get('class-levels', [ClassLevelController::class, 'indexData'])->name('class-levels.index');
Route::get('class-levels/create', [ClassLevelController::class, 'createData'])->name('class-levels.create');
Route::post('class-levels', [ClassLevelController::class, 'storeData'])->name('class-levels.store');
Route::get('class-levels/{class_level}', [ClassLevelController::class, 'showData'])->name('class-levels.show');
Route::get('class-levels/{class_level}/edit', [ClassLevelController::class, 'editData'])->name('class-levels.edit');
Route::put('class-levels/{class_level}', [ClassLevelController::class, 'updateData'])->name('class-levels.update');
Route::delete('class-levels/{class_level}', [ClassLevelController::class, 'destroyData'])->name('class-levels.destroy');
// Route::resource('class-levels', \App\Http\Controllers\ClassLevelController::class);
// route
