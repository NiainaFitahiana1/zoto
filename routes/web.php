<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Visiteur\PageController;


Route::get('/',[PageController::class,'index'])->name("home");
Route::get('/login',[LoginController::class,'index'])->name("login");
Route::get('/article',[PageController::class, 'article'])->name("article");
