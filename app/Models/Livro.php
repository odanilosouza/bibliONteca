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
   

}