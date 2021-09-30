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
    </nav>
    <div class="container">
        
        <div class="row justify-content-md-center" style="margin-top:2rem;">
            <div class="card" style="width:350px;">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>
  
                        <?php if (isset($_GET["login"]) && $_GET["login"] == 'error'){ ?>
                            <div class="text-danger">
                                Usuário ou senha inválido(s)
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET["login"]) && $_GET["login"] == 'error2'){ ?>
                            <div class="text-danger">
                                Você primeiro precisa fazer login
                            </div>
                        <?php } ?>
                        
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;" >Entrar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>