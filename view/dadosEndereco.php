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
                        <li class="active"><a>Dados de Endereço</a></li>
                        <li><a>Ficha Médica</a></li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <form action="ficha.php">
                    <h1>Dados de Endereço</h1>
                    <div class="form-group">
                        <label for="rua">Rua/Quadra:</label>
                        <input type="text" class="form-control" required value="" placeholder="Rua/Qd">
                    </div>
                    <div class="form-group">
                        <label for="numero">Número da Casa/Apartamento:</label>
                        <input type="number" name="cep2" size="3" maxlength="3">
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" placeholder="Bairro">
                    </div>
                     <div class="form-group">
                        <label for="data-toggle">Estado:</label>
                        <td align="left">
                            <select name="estado"> 
                                <option value="--">----</option>
                                <option value="ac">Acre</option> 
                                <option value="al">Alagoas</option> 
                                <option value="am">Amazonas</option> 
                                <option value="ap">Amapá</option> 
                                <option value="ba">Bahia</option> 
                                <option value="ce">Ceará</option> 
                                <option value="df">Distrito Federal</option> 
                                <option value="es">Espírito Santo</option> 
                                <option value="go">Goiás</option> 
                                <option value="ma">Maranhão</option> 
                                <option value="mt">Mato Grosso</option> 
                                <option value="ms">Mato Grosso do Sul</option> 
                                <option value="mg">Minas Gerais</option> 
                                <option value="pa">Pará</option> 
                                <option value="pb">Paraíba</option> 
                                <option value="pr">Paraná</option> 
                                <option value="pe">Pernambuco</option> 
                                <option value="pi">Piauí</option> 
                                <option value="rj">Rio de Janeiro</option> 
                                <option value="rn">Rio Grande do Norte</option> 
                                <option value="ro">Rondônia</option> 
                                <option value="rs">Rio Grande do Sul</option> 
                                <option value="rr">Roraima</option> 
                                <option value="sc">Santa Catarina</option> 
                                <option value="se">Sergipe</option> 
                                <option value="sp">São Paulo</option> 
                                <option value="to">Tocantins</option> 
                           </select>
                        </td>
                    </div>
                     <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control"  required value="" placeholder="Cidade">
                    </div>
                    <div class="form-group">
                        <label for="rua">CEP:</label>
                        <input type="text" name="cep" size="5" maxlength="5" placeholder="XXXXX"> - <input type="text" name="cep2" size="3" maxlength="3" placeholder="XXX">
                    </div>

                    <button type="submit" class="btn btn-warning">Próximo</button>
                </form>

            </div>


        </div>
</html>