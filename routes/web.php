<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;


//Route::view('/', "projects.index")->name("projects.index");
//Route::view("/project/{project}", "projects.show")->name("projects.show");

Route::get('/', [ProjectsController::class, "index"])->name("projects.index");
Route::get("/project/{project}", [ProjectsController::class, "show"])->name("projects.show");
