<html>
    <head>
       <title>Cadastrando</title>
        <?php
           $host = 'localhost';
           $user = 'root';
           $pass = "";
           $banco = "users";
           $conexao = mysqli_connect($host, $user, $pass, $banco) or die("Erro de dados!");
           mysqli_select_db($conexao, $banco) or die("Banco nao encontrado!");
        ?>
    </head>
    <body>
    
        <?php
            $nome = $_POST['nomeCad'];
            #$senha = $_POST['senhaCad'];
            $senhaCodificada = md5($_POST['senhaCad']);
            
            if($nome != "" || $senha != ""){
                mysqli_query($conexao,"insert into login (nome ,senha) values('$nome' ,'$senhaCodificada')") or die("Nada enviado");
                echo "Cadastro realizado com Sucesso! <br/><a href='login.php'>Logar</a>";
            }else{
                ?>
                <script> 
                    alert("Erro! Campo vazio.");
                    window.location.href = 'cadastrar.php';
                </script>
                
                <?php
            }
            
        ?>
       
       
    </body>
</html