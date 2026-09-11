<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class HabilidadesController extends BaseController
{
    public function habilidades() : string
    {
        //1. Instancia o Model
        $conteudoModel = new ConteudoModel();

        //2.Busca o registro com Id=1
        $dados['conteudo'] = $conteudoModel->find(3);

        //3.Envia os dados para a view 'home'
        return view('habilidades', $dados);
    }
}
