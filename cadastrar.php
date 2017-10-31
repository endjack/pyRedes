
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Tela de Cadastro</title>
        <style type="text/css">
            body {
              display: table;
              position: absolute;
              height: 100%;
              width: 100%;
            }
            .jumbotron {
               display: table-cell;
               vertical-align: middle;
            } 
        </style>
    </head>
    <body>
       <div class="jumbotron vertical-center">
           <div class="container text-center"> <form name="cadastrarForm" method="post" action="cadastramento.php">
            Seu Nome de Usuario: <input type="text" name="nomeCad"/><br/><br/>
            Sua Senha: <input type="password" name="senhaCad"/><br/><br/>
            <input class="btn btn-primary" type="submit" value="Cadastrar"/>
            <a href="login.php">voltar</a>
            </div>
        </div>
            
        </form>
    </body>
</html>