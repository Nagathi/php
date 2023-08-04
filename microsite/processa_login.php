<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "connection.php";
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        
        header("Location: login_sucesso.php");
        exit;
    } else {
        header("Location: login_erro.php");
        exit;
    }
}
?>
