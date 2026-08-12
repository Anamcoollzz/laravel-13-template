
<?php

use App\Http\Controllers\SiagaCarController;
use Illuminate\Support\Facades\Route;

// Mobil Siaga Module Routes
Route::get('yajra-siaga-cars', [SiagaCarController::class, 'index'])->name('siaga-cars.index-yajra');
Route::get('yajra-siaga-cars/ajax', [SiagaCarController::class, 'yajraAjax'])->name('siaga-cars.ajax-yajra');
Route::get('ajax-siaga-cars', [SiagaCarController::class, 'index'])->name('siaga-cars.index-ajax');
Route::get('yajra-ajax-siaga-cars', [SiagaCarController::class, 'index'])->name('siaga-cars.index-ajax-yajra');
Route::get('siaga-cars/pdf', [SiagaCarController::class, 'exportPdf'])->name('siaga-cars.pdf');
Route::get('siaga-cars/csv', [SiagaCarController::class, 'exportCsv'])->name('siaga-cars.csv');
Route::get('siaga-cars/excel', [SiagaCarController::class, 'exportExcel'])->name('siaga-cars.excel');
Route::get('siaga-cars/json', [SiagaCarController::class, 'exportJson'])->name('siaga-cars.json');
Route::get('siaga-cars/import-excel-example', [SiagaCarController::class, 'importExcelExample'])->name('siaga-cars.import-excel-example');
Route::post('siaga-cars/import-excel', [SiagaCarController::class, 'importExcel'])->name('siaga-cars.import-excel');
Route::post('siaga-cars/duplicate/{siaga_car}', [SiagaCarController::class, 'duplicate'])->name('siaga-cars.duplicate');
Route::put('siaga-cars/restore/{siaga_car}', [SiagaCarController::class, 'restore'])->name('siaga-cars.restore');
Route::put('siaga-cars/restore-all', [SiagaCarController::class, 'restoreAll'])->name('siaga-cars.restore-all');
Route::delete('siaga-cars/force-delete/{siaga_car}', [SiagaCarController::class, 'forceDelete'])->name('siaga-cars.force-delete');
Route::delete('siaga-cars/force-delete-all', [SiagaCarController::class, 'forceDeleteAll'])->name('siaga-cars.force-delete-all');
Route::get('siaga-cars', [SiagaCarController::class, 'indexData'])->name('siaga-cars.index');
Route::get('siaga-cars/create', [SiagaCarController::class, 'createData'])->name('siaga-cars.create');
Route::post('siaga-cars', [SiagaCarController::class, 'storeData'])->name('siaga-cars.store');
Route::get('siaga-cars/{siaga_car}', [SiagaCarController::class, 'showData'])->name('siaga-cars.show');
Route::get('siaga-cars-single-pdf/{siaga_car}', [SiagaCarController::class, 'singlePdf'])->name('siaga-cars.single-pdf');
Route::get('siaga-cars/{siaga_car}/edit', [SiagaCarController::class, 'editData'])->name('siaga-cars.edit');
Route::put('siaga-cars/{siaga_car}', [SiagaCarController::class, 'updateData'])->name('siaga-cars.update');
Route::delete('siaga-cars/{siaga_car}', [SiagaCarController::class, 'destroyData'])->name('siaga-cars.destroy');
Route::delete('siaga-cars-using-checkbox', [SiagaCarController::class, 'destroyUsingCheckbox'])->name('siaga-cars.destroy-using-checkbox');
Route::delete('siaga-cars-truncate', [SiagaCarController::class, 'truncate'])->name('siaga-cars.truncate');
// Route::resource('siaga-cars', \App\Http\Controllers\SiagaCarController::class);
// route
