<?php
include('./config/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['class'])) {
    $class = $_POST['class'];

    $query = "SELECT MAX(roll_no) AS max_roll FROM students WHERE class = '$class'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['max_roll'] === null) {
        $maxRollNumber = 1;
    } else {
        $maxRollNumber = $row['max_roll'] + 1;
    }

    echo $maxRollNumber;
}
?>
