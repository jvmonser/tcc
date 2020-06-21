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
                        <li><a>Inicio</a></li>                        
                        <li class="active"><a>Dados Básicos</a></li>
                        <li><a>Dados de Endereço</a></li>
                        <li><a>Ficha Médica</a></li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <form action="dadosEndereco.php">
                    <h1>Dados Básicos</h1>
                    <div class="form-group">
                        <label for="Nome">Nome Completo:</label>
                        <input type="Nome" class="form-control" required value="" placeholder="Nome Completo">
                    </div>                    
                    <div class="form-group">
                        <label for="CPF">CPF:</label>
                        <input type="text" class="form-control"  required value="" placeholder="XXX.XXX.XXX-XX">
                    </div>
                     <div class="form-group">
                        <label for="data-toggle">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="email">
                    </div>
                     <div class="form-group">
                        <label for="tel">Telefone:</label>
                        <input type="tel" class="form-control" id="email" required value="" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required value="" placeholder="Email">
                    </div> 
                    <div class="form-group">
                		<label for="pwd"> Senha:</label>
                		<input type="password" class="form-control" required placeholder="Senha">
            		</div>                   
                    <button type="submit" class="btn btn-warning">Próximo</button>
                </form>

            </div>


        </div>
    </body>
</html>