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

// se o usuario esta logado mas a rota eh login, redireciona para o home
if(!empty($usuario_logado) && $rota == 'login'){

    $rota = 'home';
}

//analisa a rota

$rotas = [
    'login' => 'login.php',
    'home' => 'home.php' ,
    'page1' => 'page1.php', 
    'page2' => 'page2.php', 
    'page3' => 'page3.php',
    'page4' => 'page4.php',
    'page5' => 'page5.php',
    'logout' => 'logout.php'
];

if(!key_exists($rota, $rotas)){

    die('Acesso negado!');
}

require_once $rotas[$rota];
