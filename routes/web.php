<?php

declare(strict_types=1);

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => view('welcome'));

Route::resource('posts', PostController::class);