<?php
    $servername = "localhost";
    $username = "rindra";
    $password = "123456";

try{
    $conn = new PDO("mysql:host=$servername;dbname=test",$username,$password);
    // echo "Success";
}catch(PDOException $e) {
    echo "Failed: " . $e->getMessage();
}