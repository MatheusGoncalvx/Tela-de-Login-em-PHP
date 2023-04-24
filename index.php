<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = 'matheus';
                $senha = '123456';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm ){
                    //logado com sucesso
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    //algum erro ocorreu
                    echo '<span style="color: white;">Dados Inválidos</span>';

                }
            }
            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }
    ?>
</body>
</html>