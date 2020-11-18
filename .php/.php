<html>
    <head>
        <title>PHP test</title>
    </head>
    <body>
        <?php
         $servername ="localhost";
         $username   ="root";
         $password   ="1234";
         $database   ="pine in box";
            // criando a conexão
         $conn =mysqli_connect($servername,$username,$password,$database);
           //verificando a conexão
         if(!$conn){
             die("A conexão ao BD falhou".mysqli_connect_error());
         }
        // <?php parte das categorias
       //   $sql = "select *from produtos";
      //     $result = $conn->query($sql);
         
        //   if($result->num_rows > 0){
       //         while($rows = $result->fetch_assoc()){
      //     echo $rows["categorias"];
     //   }
    //    }else{
   //          echo 'Nenhum produto cadastrado!';
  //          }
        ?>
    </body>
</html>