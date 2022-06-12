<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title> 




    <style>
        body{

            

            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);


        }
        .login{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
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
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>


<span>
    <?php
if(isset($_GET['msg'])) {
    echo $_GET['msg'].'</br>';
}
    ?>
</span>

<form action="" method= "POST">

    <div class="login">
        <h1>CRUD</h1>

        <ul>
        
                <a href="login.php">Login</a> </br>
                <a href="cadastro.php">Cadastre-se</a>
                            
                    </ul>

    
          
        </nav>
    </div>
    </form>
</body>
</html>