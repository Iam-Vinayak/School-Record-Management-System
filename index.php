<?php  
    // Sidebar file 
    include('sidebar.php');
?>


    <!-- OLD Sidebar starts here -->

    <!-- <div class="sidebar">
        
        <div class="sidebar-container close">
            <div class="brand">
                <h2>
                    School Record
                </h2>
            </div>
            <div class="sidebar-avatar">
                <div>
                    <img src="img/2.png" alt="">
                </div>
                <div class="avatar-info">
                    <h4>Vinayak Vishwakarma</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>

            <div class="sidebar-main-menu">
                <div class="sidebar-items">
                    <a href="index.php" >
                    <i class="fa-solid fa-house-user"></i>
                        Dashboard
                    </a>
                </div>


                <div class="sidebar-items">
                    <a href="manage-student.php" >
                    <i class="fa-solid fa-user-graduate"></i>
                    Manage Student
                    </a> -->
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    
                    <!-- <div class="sub-menu">
                        <a href="add-student.php" class="submenu-items">Add student</a>
                        <a href="update-student.php" class="submenu-items">Update student</a>
                        <a href="delete-student.php" class="submenu-items">Delete student</a>
                        <a href="view-student.php" class="submenu-items">View student</a>
                    </div> -->
                <!-- </div>

                <div class="sidebar-items">
                    <a href="manage-teacher.php">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Manage Teacher
                    </a> -->
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu">
                        <a href="add-teacher.php" class="submenu-items">Add teacher</a>
                        <a href="update-teacher.php" class="submenu-items">Update teacher</a>
                        <a href="delete-teacher.php" class="submenu-items">Delete teacher</a>
                        <a href="view-teacher.php" class="submenu-items">View teacher</a>
                    </div> -->
                <!-- </div>

                <div class="sidebar-items">
                    <a href="manage-staff.php">
                    <i class="fa-solid fa-people-group"></i>
                    Manage Staff
                    </a> -->
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu active">
                        <a href="add-staff.php" class="submenu-items">Add staff</a>
                        <a href="update-staff.php" class="submenu-items">Update staff</a>
                        <a href="delete-staff.php" class="submenu-items">Delete staff</a>
                        <a href="view.staff.php" class="submenu-items">View staff</a>
                    </div> -->
                <!-- </div>

                <div class="sidebar-items" >
                    <a href="#" class="active">
                    <i class="fa-solid fa-clone"></i>
                    Bulk actions
                    </a> -->
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu">
                        <a href="add-parent.php" class="submenu-items">Add parent</a>
                        <a href="update-parent.php" class="submenu-items">Update parent</a>
                        <a href="delete-parent.php" class="submenu-items">Delete parent</a>
                        <a href="view-parent.php" class="submenu-items">View parent</a>
                    </div> -->
                <!-- </div>
            

                <div class="sidebar-items">
                    <a href="about_us.php" class="">
                    <i class="fa-solid fa-address-card"></i>
                        About us
                    </a>
                </div>
            </div>         -->
                <!-- Logout card info start here -->

            <!-- <div class="sidebar-card">
                <img src="img/2.png" width="70px" alt="">
                <h3>Vinayak Vishwakarma</h3>

                <a href="logout.php"><button type="submit" value="logout" class="logout-btn">Logout</button></a>
            </div>
        </div>
    
    </div> -->


    <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Dashboard
        </div>
        <main>
            
            <div class="dashboard-cards-section">
                <div class="dashboard-card">
                    <div class="dashboard-card-icon">
                        <!-- <i class="fa-solid fa-child"></i> -->
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="dashboard-card-info">
                        <h4>Total students</h4>
                       <?php
                        // THIS WILL ALSO RUN AND BELOW CODE WILL ALSO RUN

                        // CODE-1

                            // $dashboard_student_data_query = "SELECT * FROM students";
                            // $student_data_query_run = mysqli_query($conn,$dashboard_student_data_query);

                            // if($student_total = mysqli_num_rows($student_data_query_run))
                            // {
                            //     echo "<h1>$student_total</h1>";
                            // }
                            // else
                            // {
                            //     echo "<h1>No data</h1>";
                            // }

                        // CODE-2

                        $dashboard_student_data_query = "SELECT max(id) AS max_id FROM students";
                        $student_data_query_run = mysqli_query($conn, $dashboard_student_data_query);
                        $result = mysqli_fetch_array($student_data_query_run);
                        $max_id = (int)$result['max_id'];

                        if($max_id != 0)
                        {
                             echo "<h1>$max_id</h1>";
                        }
                        else
                        {
                            echo "<h1>N/A</h1>";
                        }
                        ?>
                        
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="dashboard-card-icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="dashboard-card-info">
                        <h4>Total teachers</h4>
                        <?php

                        $dashboard_teacher_data_query = "SELECT max(tr_id) AS max_id FROM teachers";
                        $teacher_data_query_run = mysqli_query($conn, $dashboard_teacher_data_query);
                        $result = mysqli_fetch_array($teacher_data_query_run);
                        $max_id = (int)$result['max_id'];

                        if($max_id != 0)
                        {
                             echo "<h1>$max_id</h1>";
                        }
                        else
                        {
                            echo "<h1>N/A</h1>";
                        }
                        ?>
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="dashboard-card-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="dashboard-card-info">
                        <h4>Total staff</h4>
                        <?php

                        $dashboard_staff_data_query = "SELECT max(stf_id) AS max_stf_id FROM staff";
                        $staff_data_query_run = mysqli_query($conn, $dashboard_staff_data_query);
                        $result = mysqli_fetch_array($staff_data_query_run);
                        $max_stf_id = (int)$result['max_stf_id'];

                        if($max_stf_id != 0)
                        {
                             echo "<h1>$max_stf_id</h1>";
                        }
                        else
                        {
                            echo "<h1>N/A</h1>";
                        }
                        ?>
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="dashboard-card-icon">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                    <div class="dashboard-card-info">
                        <h4>Total Revenue</h4>
                        <?php

                        // Query to retrieve the total revenue
                        $revenue_query = "SELECT SUM(paid) AS total_revenue FROM fees";
                        $revenue_result = mysqli_query($conn, $revenue_query);

                        if ($revenue_result) {
                            $revenue_data = mysqli_fetch_assoc($revenue_result);
                            $total_revenue = $revenue_data['total_revenue'];
                        } else {
                            $total_revenue = 0; // Set the default total revenue to 0 if there's an issue with the query
                        }

                        ?>
                        <h1><?php echo number_format($total_revenue, 2); ?></h1>
                    </div>
                </div>
            </div>

            <div class="sub-name-of-page">
            Recently added students
            </div>



    <?php

$query = "SELECT * FROM students ORDER BY id DESC";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    if($total != 0)
    {
     ?>

<div class="index-table-container">

        <section class="manage-index-table">
            <table class="index-table-details" width="100%">
                <thead>
                <tr>
                        <th width="6%">Student ID</th>
                        <th width="7%">Full name</th>
                        <th width="6%">Class</th>
                        <th width="6%">Roll no</th>
                        <th width="5%">Phone number</th>
                        <!-- <th width="5%">Gender</th>
                        <th width="20%">Address</th>  -->
                </tr>
                </thead>
                <tbody>

        <?php

        while($result = mysqli_fetch_assoc($data))
        {
            echo

            "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['full_name']."</td>
                    <td>".$result['class']."</td>
                    <td>".$result['roll_no']."</td>                   
                    <td>".$result['phone_no']."</td>
                </tr>
                ";
        }
    }
    else
    {
        echo "<div style='display: flex; justify-content: center; align-items: center; margin: 0px; padding: 0px;'>
        <img src='./assets/no-data4.webp' alt='No data found' style='width: 40%; height: auto;'>
        </div>;
        <div style='display: flex; justify-content: center; align-items: center; color: #396aff; font-size: 30px; ; font-weight: 500; margin: 0px; padding: 0px;'>
        No data found
        </div>";
    }

?>
            </tbody>
        </table>
    </section>
</div>

</div>

</main>
</div>

<script>
    function deleteRecord() {
        return confirm("Are you sure you want to delete this record ?");
    }
</script>

</html>

