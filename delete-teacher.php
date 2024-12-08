<?php
// Connecton file
include('./config/db_connect.php');

session_start();
$userprofile = $_SESSION['username'];

if(isset($userprofile) == true) 
{

}
else 
{
header('location:http://localhost/sms/login.php');

}

// Header file
include('header.php');

$tr_id = $_GET['tr_id'];

$query = "DELETE FROM teachers where tr_id = '$tr_id'";
$data = mysqli_query($conn, $query);

 if($data) {

    echo "<script>alert('Teacher deleted successfully');</script>";

    echo "<script>
        window.location.href = 'http://localhost/sms/manage-teacher.php';
        </script>";
}


?>