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

$stf_id = $_GET['stf_id'];

$query = "DELETE FROM teachers where stf_id = '$stf_id'";
$data = mysqli_query($conn, $query);

 if($data) {

    echo "<script>alert('Teacher staff deleted successfully');</script>";

    echo "<script>
        window.location.href = 'http://localhost/sms/manage-staff.php';
        </script>";
}


?>