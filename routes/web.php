<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;



Route::get('/', [newcontroller::class, 'show']);



