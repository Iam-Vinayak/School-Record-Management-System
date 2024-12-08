<?php  
    // Sidebar file 
    include('sidebar.php');
?>
       <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Add teacher
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
                    <input type="text" placeholder="Enter your full name" name="fname"required>
                </div>
                
                <div class="info-box">
                    <label for="">Email address</label>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Mobile number</label>
                        <input type="number" 
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); checkMinLength(this);" 
                        name="phone_no" 
                        maxlength="10" 
                        placeholder="Enter your number" 
                        required>
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
                    <input type="text" placeholder="Enter your address" name="address" required>

                </div>

                <div class="form-seperator">
                    <hr>
                </div>

                <!-- Social information section starts here -->
                <div class="form-header">
                    <label for="">2. Social information </label>
                </div>

                <div class="info-box">
                    <label for="">Qualification</label>
                    <div class="select-box">
                        <select name="qualification" id="qualification" >
                            <option value="" hidden>--Select qualification--</option>
                            <option value="10th" >10th</option>
                            <option value="12th" >12th</option>
                            <option value="Bsc" >Bsc</option>
                            <option value="Msc" >Msc</option>
                            <option value="Btech" >Btech</option>
                            <option value="Mtech" >Mtech</option>

                        </select>
                    </div>
                    <?php
                    
                        $query = "SELECT max(tr_id) AS max_id FROM teachers";
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_fetch_array($data);
                        $max_id = (int)$result['max_id'] + 1;

                    ?>
                    <div class="info-box">
                        <label for="">Teacher ID</label>
                        <input type="number" value="<?php echo $max_id ?>" placeholder="Enter the assigned ID" name="tr_id" required readonly>
                    </div>
                </div>

                <button type="submit" value="add" name="add" class="add-btn">Submit</button>
            </form>
            
        </div>
    </div>


<script>

    // Minimun length of phone number must be 10 digit
    function checkMinLength(inputElement) {
    if (inputElement.value.length < 10) {
        inputElement.setCustomValidity('Minimum length must be 10 digits');
    } else {
        inputElement.setCustomValidity('');
    }
}
</script>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {
    $full_name = $_POST['fname'];
    $email = $_POST['email'];
    $phne_number = $_POST['phone_no'];
    $birth_date = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $tr_id = $_POST['tr_id'];

    $add_teacher_query = "INSERT INTO teachers (full_name, email, phone_no, dob, gender, address, qualification, tr_id) VALUES ('$full_name', '$email', '$phne_number', '$birth_date', '$gender', '$address', '$qualification', '$tr_id')";

    $teacher_data = mysqli_query($conn, $add_teacher_query) or die(mysqli_error($conn));
    if ($teacher_data) {
        echo "<script>alert('Teacher added successfully');</script>";

        echo "<script>
        window.location.href = 'http://localhost/sms/manage-teacher.php';
        </script>";

        exit; 
    } else {
        echo "<script>alert('Unable to add data');</script>";
    }
}
?>