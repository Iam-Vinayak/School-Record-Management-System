<?php
// NEW CODE

// Connection file
include('./config/db_connect.php');

session_start();
$userprofile = $_SESSION['username'];

if (!isset($userprofile)) {
    header('location: http://localhost/sms/login.php');
    exit;
}

// // Header file
include('header.php');

if (isset($_POST['delete_multiple_staff_btn'])) {
    if (isset($_POST['delete_multiple_staff_id'])) {
        // Ensure that the values are integers to prevent SQL injection
        $ids = array_map('intval', $_POST['delete_multiple_staff_id']);
        $ids_string = implode(',', $ids);

        // Construct the DELETE query
        $delete_query = "DELETE FROM staff WHERE stf_id IN ($ids_string)";

        // Execute the query
        if (mysqli_query($conn, $delete_query)) {
                echo "<script>alert('Records deleted successfully');</script>";
                echo "<script>window.location.href = 'http://localhost/sms/manage_delete_staff.php';</script>";
            } else {
                echo "<script>alert('Unable to delete records');</script>";
                echo "<script>window.location.href = 'http://localhost/sms/manage_delete_staff.php';</script>";
            }
        } else {
            echo "<script>alert('Please select records to delete.');</script>";
            echo "<script>window.location.href = 'http://localhost/sms/manage_delete_staff.php';</script>";
        }
    }

?>
