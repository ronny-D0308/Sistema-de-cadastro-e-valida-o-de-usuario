<?php
if(!empty($_GET['id'])) {

    $servername = "Localhost";
    $username = "root";
    $password = "";
    $bdname = "bdsecund";

    $conn = new mysqli( $servername, $username, $password, $bdname);

    if($conn->connect_error) {
        die("Erro na conexão". $conn->connect_error);
    }

    $id = $_GET['id'];

    $consul = "SELECT * FROM usuarios WHERE id = $id";

    $result = $conn->query($consul);

    if($result->num_rows > 0) {
        $consulDelete = "DELETE FROM usuarios WHERE id = $id";
        $resultDelete = $conn->query($consulDelete);
    }
    header('Location: Pageadmin.php');
}
?>