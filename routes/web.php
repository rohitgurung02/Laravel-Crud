<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;


Route::get('/',[myController::class,'create'])->name('index');
Route::post('show',[myController::class,'store'])->name('store');
Route::get('showdata',[myController::class,'showData'])->name('showdata');
Route::get('edit/{id}',[myController::class,'edit'])->name('edit');
Route::put('edit/{id}',[myController::class,'update'])->name('update');
Route::get('delete/{id}',[myController::class,'destroy'])->name('destroy');
