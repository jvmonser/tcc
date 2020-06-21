<html lang="en">
    <head>
        <title>Trabalho</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body background="img/vet.jpg" >
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <div class="container">
            <div class="jumbotron">
                <h1>Tela de login</h1>
                
                <form action="principalCliente.php" method="post">
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" required placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Senha:</label>
                        <input type="password" class="form-control" required placeholder="Senha">
                    </div>                    
                    
                    <button type="submit" class="btn btn-success"> Acessar </button>                    
                </form>
                
            </div>
        </div>
        
    </body>
</html>