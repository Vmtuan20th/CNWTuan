<?php
    $severname="localhost";
    $username="root";
    $password="vertrigo";
    $database="shopsmart";

    $connect= new mysqli($severname,$username,$password,$database);
    if(mysqli_connect_errno()){
        echo "loi ket noi".mysqli_connect_error();
        exit();
    }
?>