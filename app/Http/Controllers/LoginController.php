<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
   public function mostrarView(){

       return view('login');
   }

   public function logar(){

       $form = $_REQUEST;
       
       $usuario = usuario::buscarPorEmail($form['email']);

       if(! $usuario){
           throw new Exception("Usuário não cadastrado. ");
       } 

       if($usuario->senha != $form['senha']){
           throw new Exception("Senha incorreta");

       }

       session(['usuario' => $usuario]);
       return redirect("/home");

   }

}
