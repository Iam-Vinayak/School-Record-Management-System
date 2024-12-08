<?php
// error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sms";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    // $conn = mysqli_connect('localhost','root','','sms');

    if($conn)
    {
        // echo "Connection is working";
    }
    else 
    {
        echo "Connection has failed".mysqli_connect_error();
    }
?>