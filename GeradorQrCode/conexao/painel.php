<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Painel</title>
    <style>
      
        *,a{
            
            text-align: center;
            margin: 300px 0px 0px 0px;
            background: linear-gradient(#2354f5, #4d01ff);
            color: white;                  
            background-attachment: fixed
            
        }
        
    </style>
</head>
<body>
    <h1>Bem Vindo Professor: <?php echo $_SESSION['nomeprofessor']; ?></h1> 
    <br>
    
    <a href="logout.php">Fechar</a>
    
</body>
</html>