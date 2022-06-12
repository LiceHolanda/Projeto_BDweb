<html>
    <head>
        <title>Desenvolvimento de Banco de Dados</title>
</head>
<body>

<h1 style="color:black; background-color:white; text-align: right; font-family: verdana; font-size: 17px;"> ↝ <a href="logout.php">Sair</a></a></h1>


<?php
    //start the session
    session_start();  

      if (isset ($_GET['msg'])) {
          echo "<span>".$_GET['msg'].'</span></br>'; 
      }
     
if($_SESSION["estaLogado"]==true) {
  echo "<h1>Seja bem vindo(@),  " .$_SESSION["email"]."</h1>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "listas_cet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);
echo "<h2>Lista de usuários cadastrados:</h2>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - email: " .$row["email"]. " - telefone: " . $row["telefone"]. " - senha: " . $row["senha"]. " - sexo: " . $row["sexo"]. " - data de nascimento: " . $row["data_nascimento"]. "<a href='editar.php?id=". $row["id"]."'><img src=\"images/edit.png\"/ style='height:20px;' alt='Editar'></a> <a href='confirmarDelete.php?id=". $row["id"]."'><img src=\"images/delete.png\"/ style='height:20px;' alt='Excluir'></a> <br>";
  }
} else {                                    
  echo "0 results";
}
$conn->close();
} else {
  echo "Usuário nao logado.";
}
?>
<br>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title> 


    <style>
        body{
          <style>
     
    

            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);

  
            
          }

h1 {font-family: verdana;text-align: center; font-size: 130%;}
p {color: black; text-align: right; font-size:18px;}
p.main { text-indent: 50px; text-align: justify; white-space: pre;
}


 
</style>
</head>

<p> BANCOS DE DADOS PARA WEB - T01 (2022.1) </p>


<h1 style="color:black; background-color:white; text-align: center; font-family: verdana; font-size: 25px;">ƪ(˘⌣˘)ʃ  </a></h1>

<h1>ENCONTRE AQUI A LISTA DE EXERCÍCIOS QUE VOCÊ PRECISA !</h1>

</body>

</html>

</head>
<body>
  


<p style="letter-spacing: 40px;text-align: center;font-size:22px;"><b>C&T</b>
<p style="text-align: center;font-family: verdana;font-size:15px;word-spacing: 20px;"><i> Ciências   &   Tecnologia </i></p>



<p style="text-align: left; font-family: verdana; "> Faça a sua busca </p>  


<p style="text-align: left;margin-left:20px; "> <b>Disciplina</b> "campo para digitar o nome  da disciplina"</p>
<p style="text-align: left;margin-left:20px;"> <b>Unidade</b> "1, 2 ou 3" </p>
<p style="text-align: left;margin-left:20px;"> <b>Ano</b> "ajuda para ter uma referência se por exemplo, foi aplicada em tempos remotos" </p>





<p class = "main" > 
    Site criado com o objetivo de ajudar alunos na sua dura trajetória 
acadêmica com imensas quantidades de exercícios a cada semestre. 
Aqui você pode encontrar modelos antigos de listas aplicadas fazendo
uma busca por disciplina, professor, unidade e ano em que ela foi aplicada.  </p>
   
<p style="text-align: center;"><b>Link para solicitações:</b> <a href=""> Solicitações</a></p>   


</body>
</html>


<br>
</style>
</body>
</html>