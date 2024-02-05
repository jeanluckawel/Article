<?php

use Illuminate\Support\Facades\Route;

Route::get('/store', function () {
    return view('article.store');
});

//Route::get('store',[App\Http\Controllers\ArticleController::class,'store'])->name('store');
