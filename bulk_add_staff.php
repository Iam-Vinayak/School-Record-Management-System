<?php  
    // Sidebar file 
    include('sidebar.php');
?>
       <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Bulk Add Staff
        </div>
        <hr>

        <div class="bulk-info-container">
            <form action="#" id="bulk-add-form" method="POST" >
                <div class="bulk-student-form">

                    <div class="bulk-srno-box">
                            <label for="">Sr No.</label>
                            <input type="text" class="sr" id="srno" name="srno" value="1" readonly>
                    </div>

                    <div class="bulk-column">
                        <div class="bulk-info-box">
                            <label for="">Full Name</label>
                            <input type="text" placeholder="Enter your full name" name="fname[]" id="fname"required>
                        </div>
                        
                        <div class="bulk-info-box">
                            <label for="">Email address</label>
                            <input type="email" placeholder="Enter your email" name="email[]" id="email" required>
                        </div>
                        
                        <div class="bulk-info-box">
                            <label for="">Mobile number</label>
                            <input type="number" 
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                            name="phone_no[]"
                            id="phone_no" 
                            maxlength="10" 
                            placeholder="Enter your number" required>
                        </div>
                    </div>
                    
                    <div class="bulk-column">
                        <div class="bulk-info-box">
                            <label for="">Date of birth</label>
                            <input type="date" placeholder="Enter your date of birth" name="dob[]" id="dob" required>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Gender</label>
                            <div class="select-box">
                                <select name="gender[]" id="gender" >
                                    <option value="" hidden>--Select gender--</option>
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="bulk-info-box address-box">
                            <label for="">Address</label>
                            <input type="text" placeholder="Enter your full address" name="address[]" id="address" required>
                        </div>
                            
                    </div>
                    
                    <div class="bulk-column">
                        

                        <div class="bulk-info-box">
                            <label for="">Class</label>
                            <div class="select-box">
                                <select name="qualification[]" id="qualification" >
                                    <option value="" hidden>--Select qualification--</option>
                                    <option value="10th" >10th</option>
                                    <option value="12th" >12th</option>
                                    <option value="Bsc" >Bsc</option>
                                    <option value="Msc" >Msc</option>
                                    <option value="Btech" >Btech</option>
                                    <option value="Mtech" >Mtech</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    
                    <div id="new_rows"></div>


                    <button type="submit" id="add" value="add" name="add" class="add-btn">Submit</button>

                    <button type="button" id="add_row" name="add_row" class="add-row-btn">
                        <label>Add row</label>
                        <span><i class="fa-solid fa-plus"></i></span>    
                    </button>

                </div>

            </form>
            
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>

var rowCount = 1;

    // Add new rows script
    $('#add_row').click(function(){

        rowCount++;

        var length = $('.sr').length;
        // alert(length);

        var i = parseInt(length)+parseInt(1);



        $('#new_rows').slideDown();
        var newrow = '<br>';
            newrow = '<div class="bulk-student-form">';
            newrow += '<div class="bulk-srno-box" style="margin: 20px 0 0 0;">';
            newrow += '<label for="">Sr No.</label>';
            newrow += '<input type="text" class="sr" id="srno" name="srno" value="'+i+'" readonly>';
            newrow += '</div>';

            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Full Name</label>';
            newrow += '<input type="text" placeholder="Enter your full name" name="fname[]" id="fname"required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Email address</label>';
            newrow += '<input type="email" placeholder="Enter your email" name="email[]" id="email" required>';
            newrow += '</div>';
            
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Mobile number</label>';
            newrow += '<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="phone_no[]" id="phone_no" maxlength="10" placeholder="Enter your number" required>';
            newrow += '</div>';
            newrow += '</div>';
            
            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Date of birth</label>';
            newrow += '<input type="date" placeholder="Enter your date of birth" name="dob[]" id="dob" required>';
            newrow += '</div>';
        

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Gender</label>';
            newrow += '<div class="select-box">';
            newrow += '<select name="gender[]" id="gender" >';
            newrow += '<option value="" hidden>--Select gender--</option>';
            newrow += '<option value="Male" >Male</option>';
            newrow += '<option value="Female" >Female</option>';
            newrow += '</select>';
            newrow += '</div>';
            newrow += '</div>';


            
            newrow += '<div class="bulk-info-box address-box">';
            newrow += '<label for="">Address</label>';
            newrow += '<input type="text" placeholder="Enter your full address" name="address[]" id="address" required>';
            newrow += '</div>';
            newrow += '</div>';
            
            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Class</label>';
            newrow += '<div class="select-box">';
            newrow += '<select name="qualification[]" id="qualification" >';
            newrow += '<option value="" hidden>--Select qualification--</option>';                       
            newrow += '<option value="10th" >10th</option>';
            newrow += '<option value="12th" >12th</option>';
            newrow += '<option value="Bsc" >Bsc</option>';
            newrow += '<option value="Msc" >Msc</option>';
            newrow += '<option value="Btech" >Btech</option>';
            newrow += '<option value="Mtech" >Mtech</option>';
            newrow += '</select>';
            newrow += '</div>';
            newrow += '</div>';
            newrow += '</div>';
            
            newrow += '<button type="button" id="delete_row" name="delete_row" class="delete-row-btn">';
            newrow += '<label>Remove row</label>';
            newrow += '<span><i class="fa-solid fa-trash"></i></span>';
            newrow += '</button>';
            
            newrow += '</div>';

        $('#new_rows').append(newrow);
    });

    // Remove row code
    $('.bulk-student-form').on('click','#delete_row',function(){
            $(this).closest('.bulk-student-form').remove();
            // alert ("Working");
        });

    // Auto select max roll number script
    $(document).ready(function () {
            $('#class').on('change', function () {
                var selectedClass = $(this).val();

                $.post('get_max_roll.php', { class: selectedClass }, function (data) {
                    $('#rollno').val(data).prop('readonly', true);
                });
            });
    });

</script>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {
    $full_name = isset($_POST['fname']) ? $_POST['fname'] : array();
    $email = isset($_POST['email']) ? $_POST['email'] : array();
    $phne_number = isset($_POST['phone_no']) ? $_POST['phone_no'] : array();
    $birth_date = isset($_POST['dob']) ? $_POST['dob'] : array();
    $gender = isset($_POST['gender']) ? $_POST['gender'] : array();
    $address = isset($_POST['address']) ? $_POST['address'] : array();
    $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : array();

    $successCount = 0; // Counter for successful inserts

    // Loop through the arrays and insert each record
    for ($count = 0; $count < count($full_name); $count++) {

        // Check if the array key exists
        if (isset($full_name[$count], $email[$count], $phne_number[$count], $birth_date[$count], $gender[$count], $address[$count], $qualification[$count])) {
            $fullname_clean = mysqli_real_escape_string($conn, $full_name[$count]);
            $email_clean = mysqli_real_escape_string($conn, $email[$count]);
            $phne_number_clean = mysqli_real_escape_string($conn, $phne_number[$count]);
            $birth_date_clean = mysqli_real_escape_string($conn, $birth_date[$count]);
            $gender_clean = mysqli_real_escape_string($conn, $gender[$count]);
            $address_clean = mysqli_real_escape_string($conn, $address[$count]);
            $qualification_clean = mysqli_real_escape_string($conn, $qualification[$count]);

            if ($fullname_clean != '' && $email_clean != '' && $phne_number_clean != '' && $birth_date_clean != '' && $gender_clean != '' && $address_clean != '' && $qualification_clean != '') 
            
            {
                $conn->query("INSERT INTO staff (full_name, email, phone_no, dob, gender, address, qualification) VALUES ('$fullname_clean', '$email_clean', '$phne_number_clean', '$birth_date_clean', '$gender_clean', '$address_clean', '$qualification_clean')");
                $successCount++;
            }
        }
    }

    // Check if at least one record was successfully inserted
    if ($successCount > 0) {
        echo "<script>alert('Staff added successfully');</script>";
        echo "<script>window.location.href = 'http://localhost/sms/manage-staff.php';</script>";
    } else {
        echo "<script>alert('Unable to add data');</script>";
    }
}

?>
