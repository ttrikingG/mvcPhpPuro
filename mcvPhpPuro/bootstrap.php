<?php

session_start();

require "vendor/autoload.php";

use app\classes\Bind;

$config = require "config.php";

Bind::set('config', $config);
