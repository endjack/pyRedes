
<!DOCTYPE html>
<?php
    header( 'content-type: text/html; charset=utf-8' );
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Tela de Login</title>
        <style type="text/css">
           body {
              display: table;
              position: absolute;
              height: 100%;
              width: 100%;
            }
            div.menor{
                width:30%;
                float:none;
                margin:auto;
            }
            .jumbotron {
               display: table-cell;
               vertical-align: middle;
            } 
            span.logintext{
                font-weight: bold;
                color: #4682B4;
                font-size:16pt;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron vertical-center">
           <div class="container text-center">
            <form name="loginForm" method="post" action="autenticacao.php">
               <fieldset>
                    <div class="menor">
                        <span class="logintext">Usuário</span><br/><input class="form-control" type="text" name="nome" placeholder="Digite seu nome de usuário"/>
                        
                    </div>
                    <div class="menor">
                        <br/><span class="logintext">Senha</span><br/><input class="form-control" type="password" name="senha" placeholder="Digite sua senha"/>
                    </div>
                    <br/>
                    <div class="col-sm-12">
                        <input class="btn btn-primary" type="submit" value="Entrar"/>
                        <a href="cadastrar.php">Cadastrar</a>
                    </div>
               </fieldset>
            </div>   
        </div>
        </form>
    </body>
</html>