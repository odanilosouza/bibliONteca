<?php
namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Routing\Controller as BaseController;

class LivroController extends BaseController
{
    public function viewCadastro(){

        return view(('livros.cadastro'));
    }


    public function cadastrar(){

      
    }

}