<?php

use App\Http\Controllers\Api\StudyProgramControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('study-programs', StudyProgramControllers::class);