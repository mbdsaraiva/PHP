<?php 
    defined('CONTROL') or die('Acesso negado!');

    // verificando se o formulario foi submetido
    if($_SERVER['REQUEST_METHOD']== 'POST'){

        //verificar se o usuario e senha foram submetidos
        $usuario = $_POST['usuario']?? null;
        $senha = $_POST['senha']?? null;
        $erro = null;

        if(empty($usuario) || empty($senha)){

            $erro = "Usuário e senha são obrigatórios!";
        }

        // verificando se usuarios e senha são válidos

        if(empty($erro)){

            $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

            foreach($usuarios as $user){
                if($user['usuario']==$usuario && password_verify($senha, $user['senha'])) {

                    //efetua o login
                    $_SESSION['usuario'] = $usuario;

                    // voltar para a pagina inicial
                    header('location: index.php?rota=home');
                }
            }
        
        // caso contrario login invalido
        $erro = "Usuario e/ou senha inválidos!";
        }
    }

?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../inc/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <form action="index.php?rota=login" method="post">

    <h3><i class="fas fa-sign-in-alt"></i> Login</h3>
    <div>
        <label for="usuario">Usuário (email): </label>
        <div class="input-with-icon">
            <i class="fas fa-user"></i>
            <input type="email" name="usuario" id="usuario">
        </div>
    </div>
    <div>
        <label for="senha">Senha: </label>
        <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="senha" id="senha">
        </div>
    </div>

    <?php if(!empty($erro)):?>
        <p style="color: red"><?= $erro?></p>
    <?php endif;?>

    <div>
        <button type="submit">Entrar</button>
    </div>


    </form>

</body>
</html>
