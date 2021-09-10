<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Usuario;


use Illuminate\Routing\Controller as BaseController;

class UsuarioController extends BaseController
{
   public function MostrarViewCadastro(){

       return view('cadastro');
   }

   public function cadastrar(){
       
        $params = $_REQUEST;
        
        if($params['senha'] !== $params['confirmacao_senha']){
            throw new Exception('As senhas não batem! ');
        }

        if(strlen($params['senha']) < 6){
            throw new Exception('A senha deve possuir no mínimo 6 caracteres! ');

        }
        $usuarioComMesmoEmail = Usuario::buscarPorEmail($params['email']);
        if($usuarioComMesmoEmail != null){
            throw new Exception('O e-mail digitado já está cadastrado!!');
        }
        Usuario::cadastrar($params);

        echo "CADASTRADO COM SUCESSO!";
   } 

}
  