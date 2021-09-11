<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro',[UsuarioController::class, 'MostrarViewCadastro']);
Route::post('/cadastrar',[UsuarioController::class, 'cadastrar']);
Route::get('/login',[LoginController::class, 'mostrarView']);
Route::post('/logar',[LoginController::class, 'logar']);
Route::get('/home',[HomeController::class, 'mostrarView']);
