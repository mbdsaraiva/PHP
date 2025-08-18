<?php 
//iniciar sessao

session_start();

// definir uma constante de controle

define('CONTROL', true);

//verificando se existe usuario logado

$usuario_logado = $_SESSION['usuario'] ?? null;

// verifica qual a rota na URL

if(empty($usuario_logado)){

$rota = 'login';

}
else{
    $rota = $_GET['rota']?? 'home';
    
}

//analisa a rota

$rotas = [
    'login' => 'login.php',
    'home' => 'home.php'
];

if(!key_exists($rota, $rotas)){

    die('Acesso negado!');
}

require_once $rotas[$rota];
