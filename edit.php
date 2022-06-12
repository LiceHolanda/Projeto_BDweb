<html>
    <head>
        <title>Desenvolvimento de Banco de Dados para Web</title>
</head>
<body>

<a href='home.php'>Voltar</a>
<h1 style="color:black; background-color:lightcyan; text-align: right; font-family: verdana; font-size: 17px;"> ↝ <a href="logout.php">Sair</a></a></h1>

<?php
    //start the session
    session_start();  

if($_SESSION["estaLogado"]==true) {
  echo "<h1>Usuário " .$_SESSION["email"]."</h1>";
 

  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "listas_cet";
$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario WHERE id='".$id."'";

$result = $conn->query($sql);
echo "<h2>Atualizar usuário </h2>";
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc(); 
    echo "<form action='atualizar.php' method='post' >";
    echo "<input type='hidden' name='id' value='".$id."'>";
    echo "Nome <input type='input' name='nome' value='". $row["nome"]."'></br>";
    echo "E-mail <input type='input' name='email' value='". $row["email"]."'></br>";
    echo "Senha <input type='password' name='senha' value=''></br>";
    /*echo "Telefone <input type='input' name='telefone' value=''></br>";
    echo "Sexo <input type='input' name='sexo' value=''></br>";
    echo "Data de nascimento <input type='input' name='data_nascimento' value=''></br>";*/
    echo "<input type='submit' value='Atualizar'>"; 
  } else {
     echo "Usuário não existe";
  }
  $conn->close();
}else{
  echo "Usuario nao logado.";
}


?>
<br>
</body>
</html>