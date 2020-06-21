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
                        <li><a>Dados Básicos</a></li>
                        <li><a>Dados de Endereço</a></li>
                        <li class="active"><a>Ficha Médica</a></li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <form action="final.php">
                    <h1>Ficha Médica</h1>
                    <div class="form-group">
                        <label for="Nome">Nome do animal:</label>
                        <input type="text" class="form-control" required value="" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="data-toggle">Tipo de Animal:</label>
                        <td align="left">
                            <select name="animais"> 
                                <option value="--">----</option>
                                <option value="ar">Arara</option> 
                                <option value="cl">Calafate</option> 
                                <option value="cv">Cavalo</option> 
                                <option value="cd">Cardeal</option> 
                                <option value="cu">Curió</option> 
                                <option value="co">Cobra</option> 
                                <option value="ce">Coelho</option> 
                                <option value="cao">Cachorro</option> 
                                <option value="cl">Calopsita</option> 
                                <option value="cm">Camundongo</option> 
                                <option value="cc">Cacatua</option> 
                                <option value="cg">Cágado</option> 
                                <option value="es">Esquilo</option> 
                                <option value="fr">Furão</option> 
                                <option value="gh">Galinha</option> 
                                <option value="gl">Galo</option> 
                                <option value="ga">Galah</option> 
                                <option value="hm">Hamster</option> 
                                <option value="lr">Lagarto</option> 
                                <option value="mr">Mandarim</option> 
                                <option value="ou">Ouriço</option> 
                                <option value="pc">Porco</option> 
                                <option value="pi">Porquinho da Índia</option> 
                                <option value="pr">Periquito</option> 
                                <option value="pg">Papagaio</option> 
                                <option value="pd">Pardal</option> 
                                <option value="rt">Rato</option> 
                           </select>
                        </td>
                    </div>                               
                    <div class="form-group">
                        <label for="Nome">Raça:</label>
                        <input type="text" class="form-control" placeholder="Raça">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Idade:</label>
                        <input type="text" class="form-control" required value="" placeholder="Idade">
                    </div>
                     <div class="form-group">
                        <label for="data-toggle">Peso:</label>
                        <input type="text" class="form-control" placeholder="Peso (Ex.:5kg)">
                    </div>
                     
                    <div class="form-group" >
                        <label for="msg">Sintomas:</label>
                        <textarea id="msg" class="form-control" rows="7"></textarea>                        
                    </div>
                    <form action="final.php" method="post">
                        <button type="submit" class="btn btn-success" >Finalizar</button>
                    </form>
                    
                </form>

            </div>


        </div>
</html>