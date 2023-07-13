<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testc;


Route::get("/abc",[Testc::class,"home"]);
Route::get("/add",[Testc::class,"add"])->middleware("auth","admin");
Route::post("/ins",[Testc::class,"ins"])->middleware("auth");
Route::get("/sel",[Testc::class,"sel"])->middleware("auth");
Route::get("/delstd/{id}",[Testc::class,"del"])->middleware("auth");
Route::get("/edit/{id}",[Testc::class,"edit"])->middleware("auth");
Route::get("/update/{id}",[Testc::class,"update"])->middleware("auth");
Route::get("/reguser",[Testc::class,"reguser"]);
Route::post("/regins",[Testc::class,"regins"]);
Route::get("/loginuser",[Testc::class,"loginuser"]);
Route::post("/lc",[Testc::class,"lc_check"]);
Route::get("/logout",[Testc::class,"logout"]);