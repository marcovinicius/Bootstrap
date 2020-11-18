<html>
    <head>
        <title>PHP test</title>
    </head>
    <body>
        <center><h2>Cadastrar Cliente</h2></center>
        <form method="post" name="cliente" action="">
            Nome: <br>
            <input type="text" name="nome"><br>
            Sobrenome: <br>
            <input type="text" name="sobrenome"><br>
            Endereco: <br>
            <input type="text" name="endereco"><br>
        <center>
            <input type="submit" name="submit" value="Cadastrar"
        </center>
        </form>

        <?php
         $servername ="localhost";
         $username   ="root";
         $password   ="";
         $database   ="pine in box";
         
         $conn =mysqli_connect($servername,$username,$password,$database);
         
         if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['endereco']))
         
         {
            
            echo "Dados Recebidos!";

            $nome      = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $endereco  = $_POST['endereco'];
            
            $sqll = "insert into cliente (nome, sobrenome, endereco) values ('$nome','$sobreniome','$endereco')";
            
            $result = $conn->query($sql);
            
            if($result){
                echo "Dados inseridos comsucesso!";
                header("Refresh:5;connect:php");
            
            }else{
                echo "Dados não inseridos!";
            }
        }
        ?>
        <a href="form.ph">Cadastro</a>
    </body>
</html>