<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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

    <h1 class="title"> Cadastro de Usuário </h1>

    <div class="conteiner_form">
        <form action="envio.php" method="post">
            <input class="campos" type="text" name="usuario" id="" Placeholder="Digite um usuário para acesso">
            <input class="campos" type="password" name="senha" id="" Placeholder="Digite uma senha para acesso">
            <select id="tipo_usuario" name="tipo_usuario" require>
               <option value="admin"> Admin </option>
               <option value="funcio"> Funcio </option> 
            </select>
            <input type="submit" name="enviar" id="" value="ACESSAR">
            
        </form>
    </div>
</body>
</html>