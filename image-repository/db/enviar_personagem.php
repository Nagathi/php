<?php
    $img = $_POST["path"];
    $nome = $_POST["personagem"];
    $anime = $_POST["anime"];

    include "db.php";

    $sql = "INSERT INTO animes (img, nome, anime) value ('$img', '$nome', '$anime');";
    $conn->query($sql);

    header("Location: ../home.php");
    exit;
?>