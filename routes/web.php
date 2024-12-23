<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [QueryBuilderController::class, 'header']);
Route::get('/formData', [QueryBuilderController::class, 'index']);
Route::post('/insertData', [QueryBuilderController::class, 'storeData']);
Route::get('/viewData', [QueryBuilderController::class, 'viewAll']);
Route::get('/singleViewData/{id}', [QueryBuilderController::class, 'viewSingle']);
Route::get('/singlePge/{id}', [QueryBuilderController::class, 'singlePge'])->name('singlePge');
Route::get('/updatePage/{id}', [QueryBuilderController::class, 'updatePage'])->name('updateData');
Route::post('/dataUpdate', [QueryBuilderController::class, 'updated']);
Route::get('/deleteData/{id}', [QueryBuilderController::class, 'delete'])->name('deleteData');