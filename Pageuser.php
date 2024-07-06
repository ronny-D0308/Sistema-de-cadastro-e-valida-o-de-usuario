<?php
    session_start();
    if(!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'funcio') {
        header('Location: form.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Protected Page </title>
</head>
<body>
    <h1 style="text-align:center;"> OLÁ <?php echo $_SESSION['usuario'] ?>, SEJA BEM VINDO A ÁREA DO USUÁRIO </h1>
    <a href="logout.php" class="sair"> SAIR </a>
    
</body>
</html>