<?php
// ... (previous code)

// Fetch the maximum roll_no for the selected class
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['class'])) {
    $selectedClass = $_GET['class'];
    $getMaxRollNoQuery = "SELECT MAX(roll_no) AS max_roll_no FROM students WHERE class = '$selectedClass'";
    $result = mysqli_query($conn, $getMaxRollNoQuery);
    if ($result && $row = mysqli_fetch_assoc($result)) {
        $maxRollNo = $row['max_roll_no'];
        // Increment the roll_no for the new student
        $nextRollNo = $maxRollNo + 1;
    }
}

// ... (previous code)

// Inside the HTML form, add an input field for class selection and display the next roll_no
?>
<div class="info-box">
    <label for="class">Class</label>
    <div class="select-box">
        <select name="class" id="class" onchange="updateRollNo()">
            <option value="" hidden>--Select class--</option>
            <option value="1st">1st</option>
            <!-- Add options for other classes here -->
        </select>
    </div>
</div>

<div class="info-box">
    <label for="rollno">Roll no</label>
    <input type="number" id="rollno" placeholder="Automatically generated" name="rollno" readonly>
</div>

<script>
function updateRollNo() {
    const classSelect = document.getElementById('class');
    const rollNoInput = document.getElementById('rollno');
    if (classSelect.value === "1st") {
        // Update the roll_no input field with the next available roll_no
        rollNoInput.value = <?php echo isset($nextRollNo) ? $nextRollNo : 1; ?>;
    } else if (classSelect.value === "2nd") {
        // Handle other classes' roll_no values similarly
        rollNoInput.value = <?php echo isset($nextRollNo) ? $nextRollNo : 1; ?>;
    }
}
</script>

// ... (rest of your HTML and PHP code)

<!-- add students code -->
<!-- Connection file -->
<?php include('./config/db_connect.php') ?>

<!-- Header starts here -->
<?php include('header.php') ?>

<!-- Sidebar starts here -->

<div class="sidebar">
        
        <div class="sidebar-container close">
            <div class="brand">
                <h2>
                    School Record
                </h2>
            </div>
            <div class="sidebar-avatar">
                <div>
                    <img src="img/2.png" >
                </div>
                <div class="avatar-info" >
                    <h4>Vinayak Vishwakarma</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>

            <div class="sidebar-main-menu">
                <div class="sidebar-items">
                    <a href="#"  >
                    <i class="fa-solid fa-house-user"></i>
                        Dashboard
                    </a>
                </div>


                <div class="sidebar-items">
                    <a href="manage-student.php" class="active">
                    <i class="fa-solid fa-user-graduate"></i>
                    Manage Student
                    </a>
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    
                    <!-- <div class="sub-menu">
                        <a href="add-student.php" class="submenu-items">Add student</a>
                        <a href="update-student.php" class="submenu-items">Update student</a>
                        <a href="delete-student.php" class="submenu-items">Delete student</a>
                        <a href="view-student.php" class="submenu-items">View student</a>
                    </div> -->
                </div>

                <div class="sidebar-items">
                    <a href="manage-teacher.php">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Manage Teacher
                    </a>
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu">
                        <a href="add-teacher.php" class="submenu-items">Add teacher</a>
                        <a href="update-teacher.php" class="submenu-items">Update teacher</a>
                        <a href="delete-teacher.php" class="submenu-items">Delete teacher</a>
                        <a href="view-teacher.php" class="submenu-items">View teacher</a>
                    </div> -->
                </div>

                <div class="sidebar-items">
                    <a href="manage-staff.php">
                    <i class="fa-solid fa-people-group"></i>
                    Manage Staff
                    </a>
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu active">
                        <a href="add-staff.php" class="submenu-items">Add staff</a>
                        <a href="update-staff.php" class="submenu-items">Update staff</a>
                        <a href="delete-staff.php" class="submenu-items">Delete staff</a>
                        <a href="view.staff.php" class="submenu-items">View staff</a>
                    </div> -->
                </div>

                <div class="sidebar-items" >
                    <a href="manage-parent.php">
                    <i class="fa-solid fa-children"></i>
                    Manage Parent
                    </a>
                    <!-- <i class="fa-solid fa-chevron-down manage-opening-arrow down-arrow"></i> -->
                    <!-- <div class="sub-menu">
                        <a href="add-parent.php" class="submenu-items">Add parent</a>
                        <a href="update-parent.php" class="submenu-items">Update parent</a>
                        <a href="delete-parent.php" class="submenu-items">Delete parent</a>
                        <a href="view-parent.php" class="submenu-items">View parent</a>
                    </div> -->
                </div>
            

                <div class="sidebar-items">
                    <a href="#" class="">
                    <i class="fa-solid fa-phone"></i>
                        Contact us
                    </a>
                </div>
            </div>        
                <!-- Logout card info start here -->

            <div class="sidebar-card">
                <img src="img/2.png" width="70px" alt="">
                <h3>Vinayak Vishwakarma</h3>
                <button class="logout-btn">Logout</button>
            </div>
        </div>
    
    </div>
       <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Add student
        </div>
        <hr>

        <div class="info-container">
            <form action="#" method="POST" class="student-form">

                <!-- Personal information section starts here -->
                <div class="form-header">
                    <label for="">1. Personal information </label>
                </div>
                
                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Enter your full name" name="fname" required>
                </div>

                <div class="info-box">
                    <label for="">Parent Name</label>
                    <input type="text" placeholder="Enter your parent's name" name="pname" required>
                </div>
                
                <div class="info-box">
                    <label for="">Email address</label>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Mobile number</label>
                        <input type="number" 
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                        name="phone_no" 
                        maxlength="10" 
                        placeholder="Enter your number" required>
                    </div>

                    <div class="info-box">
                        <label for="">Date of birth</label>
                        <input type="date" placeholder="Enter your date of birth" name="dob" required>
                    </div>
                </div>

                <div class="gender-section">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" value="Male">Male
                            <!-- <label for="check-male" >Male</label> -->
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" value="Female">Female
                            <!-- <label for="check-female">Female</label> -->
                        </div>
                    </div>
                </div>

                <div class="info-box address-box">
                    <label for="">Address</label>
                    <input type="text" placeholder="Enter your full address" name="address" required>
                </div>

                <div class="form-seperator">
                    <hr>
                </div>

                <!-- Social information section starts here -->
                <div class="form-header">
                    <label for="">2. Social information </label>
                </div>

                <div class="info-box">
                    <label for="">Class</label>
                    <div class="select-box">
                        <select name="class" id="class" >
                            <option value="" hidden>--Select class--</option>
                            <option value="1st" >1st</option>
                            <option value="2nd" >2nd</option>
                            <option value="3rd" >3rd</option>
                            <option value="4th" >4th</option>
                            <option value="5th" >5th</option>
                            <option value="6th" >6th</option>
                            <option value="7th" >7th</option>
                            <option value="8th" >8th</option>
                            <option value="9th" >9th</option>
                            <option value="10th" >10th</option>
                        </select>
                    </div>
                    <div class="info-box">
                        <label for="">Roll no</label>
                        <input type="number" placeholder="Enter the assigned roll no" name="rollno" required>
                    </div>
                </div>
                <button type="submit" value="add" name="add" class="add-btn">Submit</button>
            </form>
            
        </div>
    </div>


<!-- Footer starts here  -->
<?php include('footer.php')?>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {
    $full_name = $_POST['fname'];
    $parent_name = $_POST['pname'];
    $email = $_POST['email'];
    $phne_number = $_POST['phone_no'];
    $birth_date = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $roll_no = $_POST['rollno'];

    $add_student_query = "INSERT INTO students (full_name, parent_name, email, phone_no, dob, gender, address, class, roll_no) VALUES ('$full_name', '$parent_name', '$email', '$phne_number', '$birth_date', '$gender', '$address', '$class', '$roll_no')";

    $student_data = mysqli_query($conn, $add_student_query) or die(mysqli_error($conn));
    if ($student_data) {
        echo "<script>alert('Data added successfully');</script>";
        echo "<script>
        window.location.href = 'http://localhost/sms/manage-student.php';
        </script>";

        exit; 
    } 
    else 
    {
        echo "<script>alert('Unable to add data');</script>";
    }
}
?>


