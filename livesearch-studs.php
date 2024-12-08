<?php
// Connection file
include('db_connect.php');

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    if (!empty($input)) {
        $query = "SELECT * FROM students WHERE id LIKE '%$input%' OR full_name LIKE '%$input%' OR class LIKE '%$input%' OR roll_no LIKE '%$input%' OR email LIKE '%$input%' OR phone_no LIKE '%$input%' OR dob LIKE '%$input%' OR gender LIKE '%$input%' OR address LIKE '%$input%' OR parent_name LIKE '%$input%'"; // Use '%' for wildcard search
    } else {
        $query = "SELECT * FROM students"; // Retrieve all data when input is empty
    }

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table-details" width="200%">
            <thead>
                <tr>
                <th width="10%">Actions</th>
                <th width="6%">Student ID</th>
                <th width="12%">Full name</th>
                <th width="6%">Class</th>
                <th width="6%">Roll no</th>
                <th width="18%">Email</th>
                <th width="%">Phone number</th>
                <th width="10%">Date of birth</th>
                <th width="%">Gender</th>
                <th width="20%">Address</th>
                <th width="15%">Parent name</th>
                </tr>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            // Output each row here
            echo "<tr>";
            echo "<td>
            <div class='wrapper'>
                <button class='update-icon'>
                    <div class='tooltip'>Update</div>
                    <a href='update-student.php?id=$row[id]'>
                    <span><i class='fa-solid fa-file-pen'></i></span>
                    </a>
                </button>
                <button onclick='return deleteRecord()' class='delete-icon'>
                    <div class='tooltip'>Delete</div>
                    <a href='delete-student.php?id=$row[id]'>
                        <span><i class='fa-solid fa-trash' aria-hidden='true'></i></span>
                    </a>
                </button>
            </div>
            </td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['parent_name'] . "</td>";
            echo "</tr>";
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
