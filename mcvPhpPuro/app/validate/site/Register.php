<?php

namespace app\validate\site;

use app\validate\Validate;
use app\models\admin\Admin;

class Register extends Validate
{
    public function validate()
    {
        $this->required(['email', 'password']);
        $this->email(['email']);
        $this->max(['password' => 6]);
        $this->unique(['email' => Admin::class]);
    }
}
