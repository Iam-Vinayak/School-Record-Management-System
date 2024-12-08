<?php
// Connection file
include('db_connect.php');

if (isset($_POST['input'])) {
    $input = mysqli_real_escape_string($conn, $_POST['input']); // Sanitize input to prevent SQL injection

    if (!empty($input)) {
        $query = "SELECT * FROM staff WHERE stf_id LIKE '%$input%' OR full_name LIKE '%$input%' OR qualification LIKE '%$input%' OR email LIKE '%$input%' OR phone_no LIKE '%$input%' OR dob LIKE '%$input%' OR gender LIKE '%$input%' OR address LIKE '%$input%'";
    } else {
        $query = "SELECT * FROM staff";
    }

    $result = mysqli_query($conn, $query);

    ?>

        <button type="submit" onclick='return deleteRecord()' id="delete_all_records" class='delete-records' name='delete_multiple_staff_btn'>
            <a>Delete</a>
            <span><i class='fa-solid fa-trash' aria-hidden='true'></i></span>
        </button>

    <?php

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="bulk-table-details" width="150%">
        <thead>
            <tr>
            <th width="8%">Select all <br> <div class="delete_checkbox"><input type="checkbox" id="checkAll" name="delete_multiple_staff_id[]" value="";></div></th>
            <th width="4%">Staff ID</th>
            <th width="12%">Full name</th>
            <th width="10%">Qualification</th>  
            <th width="14%">Email</th>
            <th width="%">Phone number</th>
            <th width="10%">Date of birth</th>
            <th width="%">Gender</th>
            <th width="20%">Address</th> 
            </tr>
        </thead>
        <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>
            <div class='delete_checkbox'><input type='checkbox' class='checkbox_item' name='delete_multiple_staff_id[]' value='" . $row['stf_id'] . "'/></div>
            </td>";
            echo "<td>" . $row['stf_id'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['qualification'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }

        echo '</tbody></table>';
    } else {
        echo "<div style='display: flex; justify-content: center; align-items: center; margin: 0px; padding: 0px;'>
        <img src='./assets/no-data4.webp' alt='No data found' style='width: 50%; height: auto;'>
        </div>;
        <div style='display: flex; justify-content: center; align-items: center; color: #396aff; font-size: 35px; ; font-weight: 700; margin: 0px; padding: 0px;'>
        No data found
        </div>";
    }
}
?>

<script>
     // Select all records at once
     $(document).ready(function () {
        $('#checkAll').click(function () {
            if ($(this).is(':checked')) {
                $('.checkbox_item').prop('checked', true);
            } else {
                $('.checkbox_item').prop('checked', false);
            }
        });
    });
</script>
