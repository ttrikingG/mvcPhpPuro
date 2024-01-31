<?php

function wellcome()
{
    if(isset($_SESSION['admin_logged'])){
        $admin = $_SESSION['admin_logged'];

        return $admin->firstName.' '.$admin->lastName . ' | <a href="/panel/destroy">Logout</a>' ;
    }

    return 'Bem vindo visitante!!!';
} 