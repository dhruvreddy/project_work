<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "maskup";
    $conn = mysqli_connect($host, $username, $pass, $dbname);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>
