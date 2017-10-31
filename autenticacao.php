<html>
    <head>
       <title>Autenticando...</title>
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
            $nome = $_POST['nome'];
            $senha = md5($_POST['senha']);
            //$sql = ;
            mysqli_query($conexao, "SELECT * FROM login WHERE nome='$nome' AND senha='$senha'");
            $linha = mysqli_affected_rows($conexao);
            
           //para mais segurança no teste com cookies = https://www.youtube.com/watch?v=x7Itw6B0Vw8
            
            if($linha > 0){
                ?>
                <script type="text/javascript">
	                window.location.href = 'sistema.php';
	            </script>
	            <?php
            }else{
                echo $senha."<br/>";
                echo "Erro de login!";
            }
            
            
        ?>
       
    </body>
</html