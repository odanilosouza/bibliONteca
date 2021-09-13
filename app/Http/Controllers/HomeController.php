<?php
namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function mostrarView(){

        if(empty($_REQUEST['busca'])){
            $livros = Livro::todos(); 
        }else{
            $livros = Livro::buscar($_REQUEST['busca']);
        }

        return view('home', [
            "livros" => $livros
        ]);
    }

}