<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;

class Usuario{

    public static function buscarPorEmail($email){

        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $parans = ['email' => $email];

        $results = DB::select($sql, $parans);

        if(count($results) >= 1){
            return $results[0];
        }else{

            return null;
        }
    }

    
    public static function cadastrar($dados){
        
        $sql = "INSERT usuarios(nome, email, senha) VALUES (:nome, :email, :senha)";
        $params = [
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'senha' => $dados['senha']
        ];

        DB::insert($sql,$params);

    }

}