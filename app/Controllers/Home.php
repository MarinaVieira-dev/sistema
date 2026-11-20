<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       $model = new \App\Models\ConteudoModel();
       $conteudo = $model ->find(1);
       return view('home', ['conteudo' => $conteudo]);
    }
    public function marina() : string{
        return view('marina');
    }
}
