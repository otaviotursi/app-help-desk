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
        
        <div class="card" style="margin-top:2rem;">
            
            <!-- chamados -->
            <div class="card-header">
                Abertura de Chamados
            </div>
            <div class="card-body">
                <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                        <labe>Título</labe>
                        <input name="titulo" class="form-control" type="text" id="titulo" placeholder="Título">
                    </div>
                    
                    
                    <div class="form-group">
                        <labe>Categoria</labe>
                        <select name="categoria" class="form-control" id="categoria" placeholder="Categoria">
                            <option value="1">Categoria</option>
                            <option value="Criação Usuário">Criação Usuário</option>
                            <option value="Impressora">Impressora</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                            <option value="Rede">Rede</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <labe>Descrição</labe>
                        <textarea name="descricao" class="form-control" id="descricao" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-warning btn-lg btn-block" href="home.php">Voltar</a>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-info btn-lg btn-block">Abrir</button>
                        </div>
                    </div>
                </form>
                
            </div>

            
        </div>
    </div>
</body>
</html>