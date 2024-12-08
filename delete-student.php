<?php
// // Connecton file
// include('./config/db_connect.php');

// session_start();
// $userprofile = $_SESSION['username'];

// if(isset($userprofile) == true) 
// {

// }
// else 
// {
// header('location:http://localhost/sms/login.php');

// }

// // Header file
// include('header.php');

// $id = $_GET['id'];

// $query = "DELETE FROM students where id = '$id'";
// $data = mysqli_query($conn, $query);

//  if($data) {

//     echo "<script>alert('Record deleted successfully');</script>";

//     echo "<script>
//         window.location.href = 'http://localhost/sms/manage-student.php';
//         </script>";
// }

// Connection file
include('./config/db_connect.php');

session_start();
$userprofile = $_SESSION['username'];

if(isset($userprofile) == true) {

}
else {
    header('location:http://localhost/sms/login.php');
}

// Header file
include('header.php');

$id = $_GET['id'];

// First, delete from the "students" table
$query_students = "DELETE FROM students WHERE id = '$id'";
$result_students = mysqli_query($conn, $query_students);

// Next, delete from the "fees" table
$query_fees = "DELETE FROM fees WHERE id = '$id'";
$result_fees = mysqli_query($conn, $query_fees);

if($result_students && $result_fees) {
    echo "<script>alert('Record deleted successfully from both tables');</script>";
    echo "<script>window.location.href = 'http://localhost/sms/manage-student.php';</script>";
}
?>

