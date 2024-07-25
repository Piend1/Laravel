<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\TodoController;

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
});

route::get('/hello', function () {
    echo"Hello World";
});

route::get("hello/{name}", function ($nama) {
    echo "Hallo {$nama}, Pasti Anda Sedang Mengalami Pahit-Pahitnya Hidup";
});

route::get("hello", "App\Http\Controllers\HelloWorldController@index");

route::get("hello", [HelloWorldController::class, "index"]);

route::get("hello/{name}", [HelloWorldController::class, "perkenalan"]);

route::get("/todo", [TodoController::class, "index"]);

route::delete("/todo/{id}", [TodoController::class, "destroy"]);

route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");
route::post("/todo", [TodoController::class, "store"])->name("todo.store");

route::get("/todo/{id}", [TodoController::class, "edit"]);
route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");