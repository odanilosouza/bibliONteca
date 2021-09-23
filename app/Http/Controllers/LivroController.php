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

        $livro = null;

        if(@$_REQUEST['id']){
            $livro = Livro::buscarPorId($_REQUEST['id']);
        }

        return view('livros.cadastro',[
            "livro" => $livro
        ]);
    }

    public function cadastrar(){
        
       $CaminhoDoLivro = Livro::addPdfLivro();

        Livro::inserir([
            "titulo" => $_REQUEST['titulo'],
            "autor" => $_REQUEST['autor'],
            "pdf" => $CaminhoDoLivro
        ]);

        return redirect('/livros/listagem');
    }
 
    public function editar(){

        Livro::editar($_REQUEST['id'],$_REQUEST['titulo'], $_REQUEST['autor']);

        if(@$_FILES['livro']){
            $novoCaminhoDoLivro = Livro::substituirPdfLivro($_REQUEST['id']);
            Livro::atualizarCaminhoLivro($_REQUEST['id'], $novoCaminhoDoLivro);

        }

        return redirect('livros/listagem');
    }

    public function excluir(){
         
        Livro::removerPdfLivro($_REQUEST['id']);
        Livro::excluir($_REQUEST['id']);       
        return redirect('/livros/listagem');

    } 

}