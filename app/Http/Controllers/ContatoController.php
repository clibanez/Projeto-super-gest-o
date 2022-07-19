<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        var_dump($_POST);
        echo 'teste post';

        return view('site.contato',['titulo' => 'contato (controller)']);
    }

}
