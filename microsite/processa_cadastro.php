<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "connection.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    $sql = "INSERT INTO usuario (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";
    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    exit;
}
?>