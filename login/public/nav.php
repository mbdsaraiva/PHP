<?php 
    defined('CONTROL') or die('Acesso negado!');
?>

<hr>
    <span>Usuário: <strong><?= $_SESSION['usuario'] ?></strong></span>
    <span>
     <a href="?rota=logout">Sair</a>

    </span>
<hr>

<nav>
    <a href="?rota=home">Home</a>
    <a href="?rota=page1">Página 1</a>
    <a href="?rota=page2">Página 2</a>
    <a href="?rota=page3">Página 3</a>
    <a href="?rota=page4">Página 4</a>
    <a href="?rota=page5">Página 5</a>
    <a href="?rota=logout">Sair</a>
</nav>

