<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitieController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class,'index'])->name('index');

Route::get('/cidade/{slug?}', [CitieController::class, 'index'])->name('citie');


Route::get('/atrativo/{slug?}', [ServicePagesController::class, 'index'])->name('service.page');

Route::get('/categoria/{slug?}', [CategoriaController::class, 'index'])->name('categoria');
