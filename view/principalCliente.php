<html lang="en">
    <head>
        <title>Trabalho</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body background="img/vet.jpg">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Clinica Bicho Amigo</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a>Inicio</a></li>                        
                        <li><a>Dados Básicos</a></li>
                        <li><a>Dados de Endereço</a></li>
                        <li><a>Ficha Médica</a></li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <h1>Seja Bem-Vindo ao nosso sistema de Clínica Veterinária</h1>
                <form action="principal.php" method="post">                       
                </form>
            <form action="dadosBasicos.php" method="post">
                    <button type="submit" class="btn btn-primary" >Editar Dados</button>
                </form>
                <form action="ficha.php" method="post">
                    <button type="submit" class="btn btn-primary" >Ficha Médica</button>
                </form>
            </div>
                
        </div>
        
    </body>
</html>