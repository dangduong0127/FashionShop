<?php

function  myConnect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_shop";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $dbname);
    mysqli_query($conn, "SET NAME 'utf8'");
    return $conn;
}

function listNews(){
    $conn = myConnect();
    $qr = "select * from news order by id desc";
    $result = mysqli_query($conn,$qr);
    return $result;
}
?>