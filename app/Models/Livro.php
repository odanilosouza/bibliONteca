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

    public static function buscarPorId($idLivro){
        
        return DB::table('livros')->find($idLivro);
    }   

    public static function editar($idLivro, $titulo, $autor){
        
        DB::table('livros')->where('id', '=', $idLivro)->update([
            "titulo" => $titulo,
            "autor" => $autor 
        ]);
        
    }
    public static function atualizarCaminhoLivro($idLivro, $novoCaminhoDoLivro){

        DB::table('livros')->where('id', '=', $idLivro)->update([
            "pdf" => $novoCaminhoDoLivro
        ]);

    }


    public static function addPdfLivro(){

        $hash = md5_file($_FILES['livro']['tmp_name']);
        move_uploaded_file($_FILES['livro']['tmp_name'],$_SERVER['DOCUMENT_ROOT'] . "\livros\\$hash.pdf" );
        return "\livros\\$hash.pdf";
    }

    public static function substituirPdfLivro($idLivro){

        Livro::removerPdfLivro($idLivro);
        return Livro::addPdfLivro();

    }


    public static function removerPdfLivro($idLivro){

        $livro = DB::table('livros')->find($idLivro);
        $CaminhoAbsolutoDoLivro = $_SERVER['DOCUMENT_ROOT'] . $livro->pdf;
        @unlink($CaminhoAbsolutoDoLivro);
    }

}