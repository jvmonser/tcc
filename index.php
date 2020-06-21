<html lang="en">
    <head>
        <title>Trabalho</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="view/css/bootstrap.min.css">
    </head>
    <body background="view/img/vet.jpg">
        <script src="view/js/jquery.min.js"></script>
        <script src="view/js/bootstrap.min.js"></script>

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
                <header id="cabecalho">
                <hgroup>
                    <h1 id="vpet">V-PET - Sistema de Clínica Veterinária</h1>
                </hgroup>
                </header>

                <section id="corpo">
                    <h1 id="conceito">Sobre Nós:</h1>
                        <p id="index">O intuito deste sistema é a otimização dos processos na gestão de uma clínica veterinária, para assim melhorar a vida de quem usufrui dos serviços, e potencializar, as medidas rotineiras e gestoras dos administradores do sistema. É importante que na construção de um sistema, a organização e a administração sejam indispensáveis para a conclusão em tempo esperado e atendendo todos os requisitos propostos, pois a indispensabilidade de pesquisar inovações, em busca de concentrar-se nas ideias e colocá-las em prática é um processo que sem a devida organização dos documentos serão gerados podendo se tornar um ponto de fragilidade no projeto.</p>
                </section>

                <form action="view/login.php" method="post">
                    <button type="submit" class="btn btn-success" > Login </button>
                </form>
                <form action="view/principalCadastro.php" method="post">
                    <button type="submit" class="btn btn-primary" > Cadastrar-se </button>
                </form>
            </div>
                
        </div>
        
    </body>
</html>