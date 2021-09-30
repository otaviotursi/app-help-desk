<?php require_once "validar_acesso.php" ?>

<?php 
    
    $chamados = array();

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'r');
    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }

    fclose($arquivo);
?>

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
                Chamados
            </div>
            <div class="card-body">
                <?php foreach($chamados as $chamado) { ?>  
                    <?php 
                        $indices = explode('|', $chamado);
                        if(count($indices) < 3){
                            continue;
                        }
                        if($_SESSION['perfil_id'] == 2){
                            if($_SESSION['id'] != $indices[0]){
                                continue;
                            }
                        }
                    ?>
                    <div class="card bg-light  mb-3">
                        <div class="card-body">
                            <h4><?= $indices[1] ?></h4>
                            <h6 class="text-muted"><?= $indices[2] ?></h6>
                            <p><?= $indices[3] ?></p>
                        </div>
                    </div>
                
                <?php } ?>

                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-warning btn-lg btn-block" href="home.php">Voltar</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>