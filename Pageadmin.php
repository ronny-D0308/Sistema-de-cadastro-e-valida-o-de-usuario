<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $bdname = "bdsecund";

    $conn = new mysqli( $servername, $username, $password, $bdname);

    if($conn->connect_error) {
        die("Erro na conexão". $conn->connect_error);
    }

    session_start();

    if(!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'funcio') {
        header('Location: form.php');
        exit();
    }

    $sql = "SELECT id, nome, Senha, tipo_usuario FROM usuarios";
    $result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Protected Page </title>
</head>

<body>

    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .container-tabela{
            margin: 50px 0 0 0;
            font-size: 20px;
        }
        .table{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            margin: 0 auto;
            width: 500px;
        }
        .sair{
            display: flex;
            justify-content: start;
            color: white;
            text-decoration: none;
        }
        .acoes{
            text-decoration:none;
            margin-left: 10px;
        }
        #Editar{
            background-color: blue;
            color: white;
        }
        #Deletar{
            background-color: red;
            color: white;
        }

    </style>

    <nav >
        <div>
           <h1 style="text-align:center;"> OLÁ SEJA BEM VINDO A ÁREA DO ADMINISTRADOR </h1>
        </div>

        <div class="sair">
            <a href="logout.php" class="sair"> SAIR </a>
        </div>
    </nav>

        <div class="container-tabela">
            <table class="table">
                <thead>
                    <tr>
                        <th class="coluna" >Id</th>
                        <th class="coluna" >Nome</th>
                        <th class="coluna" >Senha</th>
                        <th class="coluna" >Tipo de usuario</th>
                        <th class="coluna" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['nome']."</td>";
                                echo "<td>".$row['Senha']."</td>";
                                echo "<td>".$row['tipo_usuario']."</td>";
                                echo "<td>
                                    <a class='acoes' id='Editar' href='edit.php?id=$row[id]' title='Editar'> A </a>
            
                                    <a class='acoes' id='Deletar' href='delete.php?id=$row[id]' title='Deletar'> D </a>
                                        </td>";
                                echo "</tr>";
                                }
                        } else {
                                echo "<tr><td> 0 resultados </td></tr>";
                        }

                        $conn->close();

                    ?>
                </tbody>
            </table>
        </div>

</html>