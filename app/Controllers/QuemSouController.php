<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class QuemSouController extends BaseController
{
    public function quemSou() : string
    {
        //1. Instancia o Model
        $conteudoModel = new ConteudoModel();

        //2.Busca o registro com Id=1
        $dados['conteudo'] = $conteudoModel->find(5);

        //3.Envia os dados para a view 'home'
        return view('quemSou', $dados);
    }
}
