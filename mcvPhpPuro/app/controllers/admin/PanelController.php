<?php

namespace app\controllers\admin;

use app\controllers\ContainerController;

class PanelController extends ContainerController
{
    public function index()
    {
        var_dump($_SESSION);

        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

         $this->view([
            'title' => 'Panel',
      
        ], 'admin.panel');
    }

    public function destroy()
    {
        unset($_SESSION['admin_logged']);

        return redirect('/');
    }
}
