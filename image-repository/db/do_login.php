<?php
    function getLogin($usuario, $senha)
    {
        include "db.php";

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            return true;
        }
        return false;
    }
?>