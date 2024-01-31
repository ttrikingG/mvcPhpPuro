<?php

namespace app\controllers\site;

use app\controllers\ContainerController;

class RegisterController extends ContainerController
{
    public function index()
    {
        $this->view([
            'title' => 'Cadastro',
        ], 'site.register');
    }

    public function store()
    {
        
    }
}