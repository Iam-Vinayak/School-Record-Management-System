<?php  
    // Sidebar file 
    include('sidebar.php');
?>

<!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Update student
        </div>
        <hr>

        <div class="info-container">
            <form action="#"  method="POST" class="update-form">

        <?php
        if (isset($_GET['id']))
         {
            $id = $_GET['id'];

            $query = "SELECT * FROM students where id = '$id'";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                $result = mysqli_fetch_assoc($data);

            }
        ?>

                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" value="<?php echo $result['full_name'];?>" name="fname" placeholder="Enter your full name" required>
                </div>

                <div class="info-box">
                    <label for="">Parent Name</label>
                    <input type="text" value="<?php echo $result['parent_name'];?>" name="pname" placeholder="Enter your parent's name" required>
                </div>
                
                <div class="info-box">
                    <label for="">Email address</label>
                    <input type="email" value="<?php echo $result['email'];?>" name="email" placeholder="Enter your email" required>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Mobile number</label>
                        <input type="number" value="<?php echo $result['phone_no'];?>" name="phone_no" placeholder="Enter your number" required>
                    </div>

                    <div class="info-box"> 
                        <label for="">Date of birth</label>
                        <input type="date" value="<?php echo $result['dob'];?>" name="dob" placeholder="Enter your date of birth" required>
                    </div>
                </div>

                <div class="gender-section">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender"
                            value="Male"
                                <?php 
                                if($result['gender'] == 'Male')
                                {
                                    echo "checked";
                                }
                            ?>
                            
                            >Male
                            <!-- <label for="check-male">Male</label> -->
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender"
                             value="Female"
                             <?php 
                                if($result['gender'] == 'Female')
                                {
                                    echo "checked";
                                }
                            ?>
                             
                             >Female
                            <!-- <label for="check-female">Female</label> -->
                        </div>
                    </div>
                </div>

                <div class="info-box address-box">
                    <label for="">Address</label>
                    <input type="text" value="<?php echo $result['address'];?>" name="address" placeholder="Enter your address" required>
                </div>

                    <div class="column">
                        <div class="info-box">
                            <label for="">Class</label>
                            <input type="text" value="<?php echo $result['class'];?>" name="class">
                            
                        </div>
                        <div class="info-box" >
                            <label for="">Roll no</label>
                            <input type="number" id="rollno" value="<?php echo $result['roll_no'];?>" name="roll_no" required>
                        </div>
                        
                    </div>
                    <!-- <div class="column">
                        <div class="info-box">
                            <label for="">Class</label>
                            <input type="text" value="<?php echo $result['class'];?>" name="address" placeholder="Enter your address" readonly>
                            <div class="select-box">
                                <select name="class" id="class" readonly>
                                    <option value="" hidden>--Select class--</option>

                                    <option value="1st" 
                                    <?php
                                        if($result['class'] == '1st')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >1st</option>

                                    <option value="2nd" 
                                    <?php
                                        if($result['class'] == '2nd')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >2nd</option>

                                    <option value="3rd" 
                                    <?php
                                        if($result['class'] == '3rd')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >3rd</option>

                                    <option value="4th" 
                                    <?php
                                        if($result['class'] == '4th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >4th</option>

                                    <option value="5th" 
                                    <?php
                                        if($result['class'] == '5th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >5th</option>

                                    <option value="6th" 
                                    <?php
                                        if($result['class'] == '6th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >6th</option>

                                    <option value="7th" 
                                    <?php
                                        if($result['class'] == '7th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >7th</option>

                                    <option value="8th" 
                                    <?php
                                        if($result['class'] == '8th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >8th</option>

                                    <option value="9th" 
                                    <?php
                                        if($result['class'] == '9th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >9th</option>

                                    <option value="10th" 
                                    <?php
                                        if($result['class'] == '10th')
                                        {
                                            echo "selected";
                                        }
                                    ?>
                                    >10th</option>

                                </select>
                            </div>
                            <div class="info-box" >
                                <label for="">Roll no</label>
                                <input type="number" id="rollno" placeholder="Enter the assigned roll no" name="rollno" required readonly>
                            </div>
                        
                        </div>
                        </div> -->

                <button type="submit" value="update" name="update" class="update-btn">Update</button>
                
            </form>
            
        </div>
    </div>

</html>

<?php
// ... (existing code)

// Your existing update code
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) {
    // ... (existing code)
    $full_name = $_POST['fname'];
    $parent_name = $_POST['pname'];
    $email = $_POST['email'];
    $phne_number = $_POST['phone_no'];
    $birth_date = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $roll_no =  $_POST['roll_no'];

    $update_student_query = "UPDATE students set full_name='$full_name', parent_name='$parent_name', email='$email', phone_no='$phne_number', dob='$birth_date', gender='$gender', address='$address', class='$class', roll_no='$roll_no' where id='$id'";

    $student_data = mysqli_query($conn, $update_student_query) or die(mysqli_error($conn));

    if ($student_data) {
        // Update related records in the fees table
        $update_fees_query = "UPDATE fees set student_name='$full_name', student_rollno='$roll_no', student_class='$class' where id='$id'";
        $fees_data = mysqli_query($conn, $update_fees_query) or die(mysqli_error($conn));

        // Check if both updates were successful
        if ($fees_data) {
            echo "<script>alert('Data updated successfully');</script>";
            echo "<script>
                window.location.href = 'http://localhost/sms/manage-student.php';
            </script>";
            exit;
        } else {
            echo "Error updating fees: " . mysqli_error($conn);
        }
    } else {
        echo "Error updating student: " . mysqli_error($conn);
    }
}



// if ($_POST['update']) 
// if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) 
// {
//     $full_name = $_POST['fname'];
//     $parent_name = $_POST['pname'];
//     $email = $_POST['email'];
//     $phne_number = $_POST['phone_no'];
//     $birth_date = $_POST['dob'];
//     $gender = $_POST['gender'];
//     $address = $_POST['address'];
//     $class = $_POST['class'];
//     $roll_no =  $_POST['roll_no'];

//     $update_student_query = "UPDATE students set full_name='$full_name', parent_name='$parent_name', email='$email', phone_no='$phne_number', dob='$birth_date', gender='$gender', address='$address', class='$class', roll_no='$roll_no' where id='$id'";

//     $student_data = mysqli_query($conn, $update_student_query) or die(mysqli_error($conn));
//     // print_r($student_data);
//     // die;
//     if ($student_data) {
//         echo "<script>alert('Data updated successfully');</script>";
//         echo "<script>
//         window.location.href = 'http://localhost/sms/manage-student.php';
//         </script>";

//         exit; 
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
    
// }


?>



