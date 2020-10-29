<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::get('/{locale?}/{page?}', function ($locale = null, $page = 'home') {
    return view()->first(["pages.$page", 'page-not-found']);
})
->name('page')
->middleware(SetLocale::class)
->where('page', '.*');
