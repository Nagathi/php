<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "php";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    if ($_POST["nome"] != "") {
        if($_POST["email"] != ""){
            if($_POST["matricula"] != ""){
                $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
                $email = mysqli_real_escape_string($conn, $_POST["email"]);
                $matricula = mysqli_real_escape_string($conn, $_POST["matricula"]);

                echo "Dados inseridos com sucesso no banco de dados.";
            }else{
                echo "<h2>Insira uma matrícula</h2>";
            }
        }else{
            echo "<h2>Insira um e-mail</h2>";
        }
        
    } else {
        echo "<h2>Insira um nome</h2>";
    }
    
    $sql = "INSERT INTO usuario (nome, email, matricula) VALUES ('$nome', '$email', '$matricula')";
    
    mysqli_close($conn);
?>