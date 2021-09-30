<?php require_once "validar_acesso.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>App HELP desk</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
             App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        
        <div class="row justify-content-md-center" style="margin-top:2rem;">
            
        <!-- cadastrar -->
            <div class="card" style="width:350px;">
                <div class="card-header">
                    Cadastrar
                </div>
                <div class="align-self-center">
                    <div class="card-body">
                        <a href="abrir_chamado.php">
                            <img src="images/formulario_abrir_chamado.png" width="70" height="70">
                        </a>
                    </div>
                </div>
            </div>

            <!-- consultar -->
            <div class="card" style="width:350px;">
                <div class="card-header">
                    Consultar
                </div>
                <div class="align-self-center">
                    <div class="card-body d-flex ">
                        <a href="consultar_chamado.php">
                            <img src="images/formulario_consultar_chamado.png" width="70" height="70">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>