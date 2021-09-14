<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;

class Livro {

    public static function todos(){

        $sql = "SELECT * FROM livros ";
        return DB::select($sql);
    }

    public static function buscar($termoDePesquisa){
        $sql = "select * from livros where titulo like ? or autor like ?;";
        return DB::select($sql, ['%'. $termoDePesquisa .'%', '%'. $termoDePesquisa .'%']);

    }
   
    public static function inserir($dados){

        $sql = "INSERT INTO LIVROS(titulo, autor, pdf) VALUES(?,?,?)";
        $parans = [$dados['titulo'], $dados['autor'], $dados['pdf']];
        DB::insert($sql,$parans);
    }

    public static function excluir($idLivro){

        $sql = "DELETE FROM livros WHERE id = ?";
        $parans = [$idLivro];
        DB::delete($sql, $parans);

    }

}