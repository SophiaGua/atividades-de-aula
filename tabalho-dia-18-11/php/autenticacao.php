<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Inicial</h1>
    
    <?php
        $nome = $_POST["nome"];
        $senha = $_POST["senha"]; 

        if($nome == "adm" and $senha == "123"){
            header("Location: "."trabsim.php");
        }elseif($nome == "Mariana" and $senha == "123"){
            header("Location: "."index3.php");
        }elseif($nome == "Bibliotecario" and $senha == "123"){
            header("Location: "."casa.php");
        }else{
            header("Location: "."index2.php");
        }
    ?>
    
</body>
</html>