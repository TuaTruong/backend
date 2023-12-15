<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/welcome', function () {
    return "<a href='". route('welcome') ."'>Home</a>";
});

// Route::get("/home", [HomeController::class,"index"]);
Route::get("/home", HomeController::class);
Route::get("/about", [AboutController::class,"index"]);
Route::get("/contact", [ContactController::class,"index"]);
Route::resource("blog", BlogController::class);

Route::get("/login", [LoginController::class,"index"])->name("login");
Route::post("/login", [LoginController::class,"handleLogin"])->name("login.submit");

Route::fallback(function () {
    return "Route not exists";
});


// Route::group(["prefix"=> "customer"], function () {
//     Route::get("/", function () {
//         return "Customer list";
//     });
//     Route::get("/create", function () {
//         return "Create customer";
//     });
//     Route::get("/show", function () {
//         return "Show customer";
//     });
// });
