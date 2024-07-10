<?php
session_start();

$servername = "Localhost";
$username = "root";
$password = "";
$bdname = "bdsecund";

$conn = new mysqli( $servername, $username, $password, $bdname);

if($conn->connect_error) {
    die("Erro na conexão". $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['usuario'];
    $pass = $_POST['senha'];
    $tipo = $_POST['tipo_usuario'];

    $stmt = $conn->prepare("SELECT Senha, tipo_usuario FROM usuarios WHERE nome = ? ");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($pass $tipo_usuario);
        $stmt->fetch();

        if($pass && $tipo == $tipo_usuario) {
            $_SESSION['usuario'] = $user;
            $_SESSION['tipo_usuario'] = $tipo;

            if($tipo == 'funcio') {

               header("Location: Pageuser.php"); 

            } else if($tipo == 'admin') {

                header('Location: Pageadmin.php');
                exit();
            }
        } else{
            echo "Usuario ou senha inválido";
        }
    } else{
        echo "Preencha os campos corretamente!!";
    }
    $stmt->close();
}

$conn->close();
?>