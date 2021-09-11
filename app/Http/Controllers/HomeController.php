<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function mostrarView(){

        return view('home');
    }

}