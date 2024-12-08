<?php
// Connection file
include('db_connect.php');

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    if (!empty($input)) {
        $query = "SELECT * FROM fees WHERE id LIKE '%$input%' OR student_rollno LIKE '%$input%' OR student_name LIKE '%$input%' OR student_class LIKE '%$input%' OR paid LIKE '%$input%' OR total LIKE '%$input%' OR remaining LIKE '%$input%' OR status LIKE '%$input%' "; // Use '%' for wildcard search
    } else {
        $query = "SELECT * FROM fees"; // Retrieve all data when input is empty
    }

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table-details" width="100%">
            <thead>
            <tr>
            <th width="5%">Actions</th>
            <th width="8%">Student ID</th>
            <th width="15%">Full name</th>
            <th width="8%">Roll no</th>
            <th width="4%">Class</th>
            <th width="4%">Paid</th>
            <th width="4%">Total</th>
            <th width="1%">Remaining</th>
            <th width="4%">Status</th>
        </tr>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            // Output each row here
            echo 
            "<tr>
                
                <td>
                <div class='wrapper'>
                    <button class='edit-icon'>
                        <div class='tooltip'>Edit</div>
                        <a href='update_fees.php?id=$row[id]'>
                        <span><i class='fa-solid fa-pen-to-square' aria-hidden='true'></i></span>
                        </a>
                    </button>

                    <button class='print-icon'>
                        <div class='tooltip'>Print</div>
                        <a href='print_student_invoice.php?id=$row[id]'>
                        <span><i class='fa-solid fa-print'></i></span>
                        </a> 
                    </button>
                </div>
                </td>
                <td>".$row['id']."</td>                   
                <td>".$row['student_name']."</td>
                <td>".$row['student_rollno']."</td>                   
                <td>".$row['student_class']."</td>
                <td>".$row['paid']."</td>
                <td>".$row['total']."</td>
                <td>".$row['remaining']."</td>
                <td>".$row['status']."</td>

                    </tr>
                    ";
        }

        echo '</tbody></table>';
    } else {
        echo "<div style='display: flex; justify-content: center; align-items: center; margin: 0px; padding: 0px;'>
        <img src='./assets/no-data4.webp' alt='No data found' style='width: 60%; height: auto;'>
        </div>;
        <div style='display: flex; justify-content: center; align-items: center; color: #396aff; font-size: 40px; ; font-weight: 700; margin: 0px; padding: 0px;'>
        No data found
        </div>";    }
}
?>
