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
        
        $hash = md5_file($_FILES['livro']['tmp_name']);

        move_uploaded_file($_FILES['livro']['tmp_name'],$_SERVER['DOCUMENT_ROOT'] . "\livros\\$hash.pdf" );

        Livro::inserir([
            "titulo" => $_REQUEST['titulo'],
            "autor" => $_REQUEST['autor'],
            "pdf" => "\livros\\$hash.pdf"
        ]);
    }

}