<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//apenas usuários autorizados, ainda falta fazer a autenticação
    //Route::post('/products', [ProductController::class, 'store']);
    //Route::put('/products/{id}', [ProductController::class, 'update']);
    //Route::delete('/products/{id}', [ProductController::class, 'destroy']);


// todos usuários podem acessar essas requests
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/login', function(){
    return view('login');
});