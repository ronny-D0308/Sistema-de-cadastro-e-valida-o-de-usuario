<?php
$servername = "localhost";
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

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, Senha, tipo_usuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $hashed_password, $tipo);

    if($stmt->execute()) {
        echo "Cadastro efetuado com secesso!!";
    } else {
        echo "Erro ao cadastrar". $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>