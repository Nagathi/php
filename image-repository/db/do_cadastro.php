<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    include "db.php";

    $sql = "INSERT INTO usuarios (nome, email, usuario, senha) value ('$nome', '$email', '$usuario', '$senha');";
    $conn->query($sql);

    header("Location: ../home.php");
    exit;
?>