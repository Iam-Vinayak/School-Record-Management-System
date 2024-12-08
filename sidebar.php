<?php
// Connecton file
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

?>

<div class="sidebar">
        
        <div class="sidebar-container close">
            <div class="brand">
                <h2>
                    School Record
                </h2>
            </div>
            <?php
                $sql = "SELECT name FROM admin WHERE id = 1";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['name'];
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
        ?>

            <div class="sidebar-avatar">
                <div>
                    <img src="img/2.png" style="width:85%">
                </div>
                <div class="avatar-info">
                    <h3><?php echo $name; ?></h3>
                </div>
            </div>

            <div class="sidebar-main-menu">

                <div class="sidebar-items">
                    <a href="index.php" id="manage-dashboard-link">
                    <i class="fa-solid fa-house-user"></i>
                        Dashboard
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="manage-student.php" id="manage-student-link">
                        <i class="fa-solid fa-user-graduate"></i>
                        Manage Student
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="manage-teacher.php" id="manage-teacher-link">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        Manage Teacher
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="manage-staff.php" id="manage-staff-link">
                        <i class="fa-solid fa-people-group"></i>
                        Manage Staff
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="bulk.php" id="manage-bulk-link">
                        <i class="fa-solid fa-clone"></i>
                        Bulk Actions
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="manage_fees.php" id="manage-fees-link">
                    <i class="fa-solid fa-sack-dollar"></i>
                        Manage Fees
                    </a>
                </div>

                <div class="sidebar-items">
                    <a href="about_us.php" id="about-us-link">
                        <i class="fa-solid fa-address-card"></i>
                        About us
                    </a>
                </div>
            </div>
      

                <!-- Logout card info start here -->

            <div class="sidebar-card">
                <img src="img/2.png" width="70px" alt="">
                <h3><?php echo $name; ?></h3>
                <a href="logout.php"><button type="submit" value="logout" class="logout-btn">Logout</button></a>
            </div>
        </div>
    
</div>


<script>

    // JavaScript to add and remove "active" class
    const links = document.querySelectorAll('.sidebar-items a');
    
    links.forEach(link => {
        link.addEventListener('click', () => {
            links.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            localStorage.setItem('activeLink', link.id);
        });
    });

    const activeLink = localStorage.getItem('activeLink');
        if (activeLink) {
        document.getElementById(activeLink).classList.add('active');
    }

</script>