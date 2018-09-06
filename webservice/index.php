<?php

// EXIBE ERROS DO PHP
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// Carrega o autoload do composer.
require __DIR__ . '/vendor/autoload.php';

// EXECUTA
$controller = new fazendaurbana\controller\PrincipalController();
$controller->index();
