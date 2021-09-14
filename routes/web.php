<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro',[UsuarioController::class, 'MostrarViewCadastro']);
Route::post('/cadastrar',[UsuarioController::class, 'cadastrar']);
Route::get('/login',[LoginController::class, 'mostrarView']);
Route::post('/logar',[LoginController::class, 'logar']);
Route::get('/',[HomeController::class, 'mostrarView']);

Route::get('/livros/listagem', [LivroController::class, 'listagem']);

Route::get('/livros/cadastro', [LivroController::class, 'viewCadastro']);
Route::post('/livros/cadastrar', [LivroController::class, 'cadastrar']);
Route::get('livros/excluir', [LivroController::class, 'excluir']);