<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teste de validação </title>

    <style>
        .title{
            text-align:center;
            font-family:arial;
            font-size:70px;
        }
        .conteiner_form{
            margin:0 auto;
            width:400px;
        }
        form{
            display:flex;
            flex-direction:column;
        }
        .campos{
            background:transparent;
            border:none;
            border-bottom: 3px solid black;
            outline:none;
            width:auto;
            height:30px;
            font-size:20px;
            margin: 10px 0px 10px 0px;
            text-align:center;
        }
        .ancora_cadastro{
            text-decoration:none;
            color:black;
        }
        
    </style>

</head>
<body>
    <h1 class="title"> Validação de Usuário </h1>

    <div class="conteiner_form">
        <form action="validate.php" method="post">
            <input class="campos" type="text" name="usuario" id="" Placeholder="Digite o seu usuário de acesso">
            <input class="campos" type="password" name="senha" id="" Placeholder="Digite sua senha de acesso">
            
            <select class="campos" id="tipo_usuario" name="tipo_usuario" require>
               <option value="admin"> Administrador </option>
               <option value="funcio"> Funcionario </option> 
            </select>
            
            <input type="submit" name="enviar" id="" value="ACESSAR">
            <a class="ancora_cadastro" href="cadastro.php"> Cadastre-se </a>
        </form>
    </div>
    
</body>
</html>