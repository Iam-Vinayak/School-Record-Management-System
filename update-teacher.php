<?php  
    // Sidebar file 
    include('sidebar.php');
?>

<!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Update teacher
        </div>
        <hr>

        <div class="info-container">
            <form action="#" method="POST" class="update-form">

        <?php
        if (isset($_GET['tr_id']))
         {
            $tr_id = $_GET['tr_id'];

            $query = "SELECT * FROM teachers where tr_id = '$tr_id'";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                $result = mysqli_fetch_assoc($data);

                // print_r($result);
                // die;

            }
        ?>

                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" value="<?php echo $result['full_name'];?>" name="fname" placeholder="Enter your full name" required>
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

                <div class="info-box">
                    <label for="">Qualification</label>
                    <div class="select-box">
                        <select name="qualification" id="class" >
                            <option value="" hidden>--Select qualification--</option>
                            <option value="10th" 
                            <?php
                                if($result['qualification'] == '10th')
                                {
                                    echo "selected";
                                }
                            ?>
                            
                            >10th</option>

                            <option value="12th" 
                            <?php
                                if($result['qualification'] == '12th')
                                {
                                    echo "selected";
                                }
                            ?>
                            >12th</option>

                            <option value="Bsc" 
                            <?php
                                if($result['qualification'] == 'Bsc')
                                {
                                    echo "selected";
                                }
                            ?>
                            >Bsc</option>

                            <option value="Msc" 
                            <?php
                                if($result['qualification'] == 'Msc')
                                {
                                    echo "selected";
                                }
                            ?>
                            >Msc</option>

                            <option value="Btech" 
                            <?php
                                if($result['qualification'] == 'Btech')
                                {
                                    echo "selected";
                                }
                            ?>
                            >Btech</option>

                            <option value="Mtech" 
                            <?php
                                if($result['qualification'] == 'Mtech')
                                {
                                    echo "selected";
                                }
                            ?>
                            >Mtech</option>

                        </select>
                    </div>

                    <div class="info-box">
                        <label for="">Teacher ID</label>
                        <input type="number" value="<?php echo $result['tr_id'];?>" name="tr_id" required readonly>
                    </div>

                    <button type="submit" value="update" name="update" class="update-btn">Update</button>
            </form>
            
        </div>
    </div>

</html>

<?php

// if ($_POST['update']) 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) 
{
    $full_name = $_POST['fname'];
    $email = $_POST['email'];
    $phne_number = $_POST['phone_no'];
    $birth_date = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $tr_id = $_POST['tr_id'];


    $update_teacher_query = "UPDATE teachers set full_name='$full_name', email='$email', phone_no='$phne_number', dob='$birth_date', gender='$gender', address='$address', qualification='$qualification' where tr_id='$tr_id'";

    $teacher_data = mysqli_query($conn, $update_teacher_query) or die(mysqli_error($conn));
    if ($teacher_data) {
        echo "<script>alert('Teacher updated successfully');</script>";

        echo "<script>
        window.location.href = 'http://localhost/sms/manage-teacher.php';
        </script>";

        exit; 
    } else {
        echo "<script>alert('Unable to add data');</script>";
    }
}


?>