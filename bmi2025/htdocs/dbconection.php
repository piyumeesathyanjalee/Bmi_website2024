<?php
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $dbname = "bmi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection faild".$conn->connect_error);
    }
    echo "Conection Succussful";
?>