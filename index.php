<?php

use Dotenv\Dotenv;

use function App\config;
use function App\env;

require_once './vendor/autoload.php';


var_dump(env('APP_NAME'));
var_dump(env('DATABASE'));
var_dump(config('db.mysql'));