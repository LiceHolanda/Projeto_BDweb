<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
//$telefone = $_POST['telefone'];
$senha = sha1($_POST['senha']);
/*$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];*/
$id = $_POST['id'];

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

if(strlen($_POST['senha']) >0 ) {
    $sql = "UPDATE usuario SET nome = '".$nome."', email = '".$email."',senha = '".$senha."' WHERE id = ".$id;
} else {
    $sql = "UPDATE usuario SET nome = '".$nome."', email = '".$email."' WHERE id = ".$id;
//incluir depois telefone = '".$telefone."', sexo= '".$sexo."', data_nascimento = '".$data_nascimento."
}


$sql = "UPDATE usuario SET nome = '".$nome."', email = '".$email."',senha = '".$senha."' WHERE id = ".$id;
//incluir depois telefone = '".$telefone."', sexo= '".$sexo."', data_nascimento = '".$data_nascimento."
    
    if ($conn->query($sql) === TRUE) {
        header('Location: home.php?msg=Usuario atualizado com sucesso');
        die();
    } else {
        echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
  ?>
        <a href= "index.php"> Voltar </a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title> 


    <style>
        body{
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
      
        a{
            color: white;
        }
        