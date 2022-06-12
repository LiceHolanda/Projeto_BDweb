<html>
    <head>
        <title>Seja bem vindo</title>
</head>
<body>
    <?php
    //start the session
    session_start();
    ?>
    
    <h1>Validar</h1>

<?php
//dados que vieram do login que vieram via POST
$email = $_POST['email'];
$senha = $_POST['senha'];
$_SESSION["estaLogado"]=false; 
$_SESSION["email"]=$email;

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

if ($result->num_rows > 0) {
  // comparar as informações
  while($row = $result->fetch_assoc()) {
      if($row["email"]== $email && $row["senha"] == sha1($senha)) {
        $_SESSION["estaLogado"]=true;
      }
  
  }
} else {
  echo "0 results";
}
if($_SESSION["estaLogado"]) {
    header("Location: home.php");
} else {
    header("Location: login.php?msg=Dados inválidos");
}

$conn->close();
?>
<br>

</body>
</html>