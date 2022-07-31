<?php

use App\Http\Controllers\QuizzesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/quizzes", [QuizzesController::class, "index"]);
