<?php
namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Routing\Controller as BaseController;

class   LivroController extends BaseController
{
    public function listagem(){
        
        $livros = Livro::todos();
        return view('Livros.listagem', [
            "livros" => $livros
        ]);
    }


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

        return redirect('/livros/listagem');
    }

    public function excluir(){
         
        Livro::excluir($_REQUEST['id']);
        return redirect('/livros/listagem');

    } 

}