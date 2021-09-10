<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro',[UsuarioController::class, 'MostrarViewCadastro']);
Route::post('/cadastrar',[UsuarioController::class, 'cadastrar']);
