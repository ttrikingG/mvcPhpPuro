<?php

namespace app\controllers\site;

use app\models\site\User;
use app\validate\site\Login;
use app\controllers\ContainerController;

class LoginController extends ContainerController
{
    public function index()
    {
        $this->view([
            'title' => 'Login',
        ], 'site.login');
    }

    public function store()
    {
        $login = validate(Login::class);
        
        if($login->hasErrors()){
            flash($login->hasErrors());

            redirect('/login');
        }

        $logged = auth(new User);

        if($logged){
            redirect('/');
        }
    }
}