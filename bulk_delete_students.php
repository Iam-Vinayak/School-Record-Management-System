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
if (isset($_POST['delete_multiple_students_btn'])) {
    if (isset($_POST['delete_multiple_students_id'])) {
        // Ensure that the values are integers to prevent SQL injection
        $ids = array_map('intval', $_POST['delete_multiple_students_id']);
        $ids_string = implode(',', $ids);

        // Construct the DELETE query
        $delete_students_query = "DELETE FROM students WHERE id IN ($ids_string)";
        $delete_result_student_query = mysqli_query($conn, $delete_students_query);

        // Next, delete from the "fees" table
        $delete_fees_query = "DELETE FROM fees WHERE id IN ($ids_string)";
        $delete_result_fees_query = mysqli_query($conn, $delete_fees_query);

        // Execute the query
        if ($delete_result_student_query && $delete_result_fees_query) {
            echo "<script>alert('Records deleted successfully');</script>";
                echo "<script>window.location.href = 'http://localhost/sms/manage_delete_students.php';</script>";
            } else {
                echo "<script>alert('Unable to delete records');</script>";
                echo "<script>window.location.href = 'http://localhost/sms/manage_delete_students.php';</script>";
            }
        } else {
            echo "<script>alert('Please select records to delete.');</script>";
            echo "<script>window.location.href = 'http://localhost/sms/manage_delete_students.php';</script>";
        }
    }

?>
