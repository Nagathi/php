<?php
    function getAnimes() {
        include "db.php";
        $sql = "SELECT * FROM animes";
        $result = $conn->query($sql);
        return $result;
    }
?>