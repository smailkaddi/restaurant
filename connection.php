<?php
session_start();
     $localhost = "localhost";
     $username = "root";
     $pass = "";
     $db = "hotel";
     $conn = mysqli_connect($localhost, $username, $pass, $db);
     if (!$conn){
        die("connection faild " . maysqli_connect_error());
     }
?>