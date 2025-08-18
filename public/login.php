<?php 
    defined('CONTROL') or die('Acesso negado!');

    // verificando se o formulario foi submetido
    if($_SERVER['REQUEST_METHOD']== 'POST'){

        //verificar se o usuario e senha foram submetidos
        $usuario = $_POST['usuario']?? null;
        $senha = $_POST['senha']?? null;
        $erro = null;

        if(empty($usuario) || empty($senha)){

            $erro = "Usuário e senha inválidos!";
        }

        // verificando se usuarios e senha são válidos
        //por fazer
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="index.php?rota=login" method="post">

    <h3>Login</h3>
    <div>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">
    </div>
    <div>

        <button type="submit">Entrar</button>
    </div>


    </form>


    <?php if(!empty($erro)):?>
        <p style="color: red"><?= $erro?></p>
    <?php endif;?>

</body>
</html>