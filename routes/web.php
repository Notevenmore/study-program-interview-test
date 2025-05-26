<?php

use App\Http\Controllers\StudyProgramControllers;
use Illuminate\Support\Facades\Route;

Route::resource('study-program', StudyProgramControllers::class);

Route::get('/', function () {
    return redirect()->route('study-program.index');
});
