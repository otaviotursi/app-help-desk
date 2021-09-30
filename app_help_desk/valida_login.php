<?php
    session_start();
    $sinalUsuarioAutenticado = False;
    $usuarioID = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrador', 2 => 'Usuário');
    $usuarios_app = array(
        array('id' => 1,'email' => 'admin@teste.com.br', 'senha' => '12345', 'perfil_id'=>1),
        array('id' => 2,'email' => 'user@teste.com.br', 'senha' => 'user123', 'perfil_id'=>1),
        array('id' => 3,'email' => 'jose@teste.com.br', 'senha' => 'user123', 'perfil_id'=>2),
        array('id' => 4,'email' => 'maria@teste.com.br', 'senha' => 'user123', 'perfil_id'=>2),
    );

    foreach ($usuarios_app as $user){
        if ($user['email'] == $_POST["email"] && $user['senha'] == $_POST["senha"]){
            $sinalUsuarioAutenticado = True;
            $usuarioID = $user["id"];
            $usuario_perfil_id = $user["perfil_id"];

        }
    }
    if ($sinalUsuarioAutenticado){
        // echo 'Usuário autenticado';
        $_SESSION["autenticado"] = 'sim';
        $_SESSION["id"] = $usuarioID;
        $_SESSION["perfil_id"] = $usuario_perfil_id;

        header('Location: home.php');
    } else {
        $_SESSION["autenticado"] = 'nao';
        header('Location: index.php?login=error');
        // echo 'Usuário não autenticado, verifique a senha e o email';
    }
?>