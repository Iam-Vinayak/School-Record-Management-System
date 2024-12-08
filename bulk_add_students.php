<?php  
    // Sidebar file 
    include('sidebar.php');
?>
       <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Bulk Add Students
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
                            <label for="">Parent Name</label>
                            <input type="text" placeholder="Enter your parent's name" name="pname[]" id="pname" required>
                        </div>
                        
                        <div class="bulk-info-box">
                            <label for="">Email address</label>
                            <input type="email" placeholder="Enter your email" name="email[]" id="email" required>
                        </div>
                    </div>

                    <div class="bulk-column">
                        <div class="bulk-info-box">
                            <label for="">Mobile number</label>
                            <input type="number" 
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                            name="phone_no[]"
                            id="phone_no" 
                            maxlength="10" 
                            placeholder="Enter your number" required>
                        </div>

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
                            
                    </div>
                    
                    <div class="bulk-column">
                        <div class="bulk-info-box address-box">
                            <label for="">Address</label>
                            <input type="text" placeholder="Enter your full address" name="address[]" id="address" required>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Class</label>
                            <div class="select-box">
                                <select name="class[]" id="class" class="class">
                                    <option value="" hidden>--Select class--</option>
                                    <option value="1st" data-fee="1000">1st</option>
                                    <option value="2nd" data-fee="2000">2nd</option>
                                    <option value="3rd" data-fee="3000">3rd</option>
                                    <option value="4th" data-fee="4000">4th</option>
                                    <option value="5th" data-fee="5000">5th</option>
                                    <option value="6th" data-fee="6000">6th</option>
                                    <option value="7th" data-fee="7000">7th</option>
                                    <option value="8th" data-fee="8000">8th</option>
                                    <option value="9th" data-fee="9000">9th</option>
                                    <option value="10th" data-fee="10000">10th</option>
                                </select>
                            </div>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Roll no</label>
                            <input type="number" id="rollno" placeholder="Enter the assigned roll no" name="rollno[]" required>
                        </div>
                    </div>

                    <div class="bulk-column">
                        <div class="bulk-info-box">
                            <label for="">Payable amount</label>
                            <input type="number" id="pay" class="pay" name="paid[]" placeholder="Enter payable amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                            maxlength="5"required>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Total Amount</label>
                            <input type="number" id="total" class="total" name="total[]" readonly>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Remaining Amount</label>
                            <input type="number" name="remaining[]" id="remaining" class="remaining" required>
                        </div>

                        <div class="bulk-info-box">
                            <label for="">Status</label>
                            <div class="select-box">
                                <select name="status[]" id="status" class="status" >
                                    <option value="" hidden>--Select--</option>
                                    <option value="Paid" >Paid</option>
                                    <option value="Remaining" >Remaining</option>
                                    <option value="Null" >Null</option>
                                </select>
                            </div>
                        </div>
                            
                    </div>

                    <div style="margin: 10px 0 30px 0;">
                        <input type='checkbox' required/>
                            <i style="font-size: 15px;">The above student has submitted all the necessory document in the office</i>
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
            newrow += '<div class="bulk-srno-box" style="margin: 0px 0 0 0;">';
            newrow += '<label for="">Sr No.</label>';
            newrow += '<input type="text" class="sr" id="srno" name="srno" value="'+i+'" readonly>';
            newrow += '</div>';

            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Full Name</label>';
            newrow += '<input type="text" placeholder="Enter your full name" name="fname[]" id="fname"required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Parent Name</label>';
            newrow += '<input type="text" placeholder="Enter your parents name" name="pname[]" id="pname" required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Email address</label>';
            newrow += '<input type="email" placeholder="Enter your email" name="email[]" id="email" required>';
            newrow += '</div>';
            newrow += '</div>';

            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Mobile number</label>';
            newrow += '<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="phone_no[]" id="phone_no" maxlength="10" placeholder="Enter your number" required>';
            newrow += '</div>';
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
            newrow += '</div>';


            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box address-box">';
            newrow += '<label for="">Address</label>';
            newrow += '<input type="text" placeholder="Enter your full address" name="address[]" id="address" required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Class</label>';
            newrow += '<div class="select-box">';
            newrow += '<select name="class[]" id="class" class="class">';
            newrow += '<option value="" hidden>--Select class--</option>';
            newrow += '<option value="1st" data-fee="1000">1st</option>';
            newrow += '<option value="2nd" data-fee="2000">2nd</option>';
            newrow += '<option value="3rd" data-fee="3000">3rd</option>';
            newrow += '<option value="4th" data-fee="4000">4th</option>';
            newrow += '<option value="5th" data-fee="5000">5th</option>';
            newrow += '<option value="6th" data-fee="6000">6th</option>';
            newrow += '<option value="7th" data-fee="7000">7th</option>';
            newrow += '<option value="8th" data-fee="8000">8th</option>';
            newrow += '<option value="9th" data-fee="9000">9th</option>';
            newrow += '<option value="10th" data-fee="10000">10th</option>';
            newrow += '</select>';
            newrow += '</div>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Roll no</label>';
            newrow += '<input type="number" id="rollno" placeholder="Enter the assigned roll no" name="rollno[]" required>';
            newrow += '</div>';
            newrow += '</div>';


            newrow += '<div class="bulk-column">';
            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Payable amount</label>';
            newrow += '<input type="number" id="pay" class="pay" name="paid[]" placeholder="Enter payable amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Total Amount</label>';
            newrow += '<input type="number" id="total" class="total" name="total[]" readonly>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Remaining Amount</label>';
            newrow += '<input type="number" name="remaining[]" id="remaining" class="remaining" required>';
            newrow += '</div>';

            newrow += '<div class="bulk-info-box">';
            newrow += '<label for="">Status</label>';
            newrow += '<div class="select-box">';
            newrow += '<select name="status[]" id="status" class="status" >';
            newrow += '<option value="" hidden>--Select--</option>';
            newrow += '<option value="Paid" >Paid</option>';
            newrow += '<option value="Remaining" >Remaining</option>';
            newrow += '<option value="Null" >Null</option>';
            newrow += '</select>';
            newrow += '</div>';
            newrow += '</div>';
            newrow += '</div>';        

            newrow += '<div style="margin: 10px 0 0 0;">';
            newrow += '<input type="checkbox" required/>';
            newrow += '<i style="font-size: 15px;">The above student has submitted all the necessory document in the office</i>';
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


// Total fees status remaining calculation
$(document).ready(function () {
    $(document).on('change', '.class', function () {
        var selectedClass = $(this).val();
        var rollnoElement = $(this).closest('.bulk-student-form').find('.rollno');
        var totalElement = $(this).closest('.bulk-student-form').find('.total');

        $.post('get_max_roll.php', { class: selectedClass }, function (data) {
            rollnoElement.val(data).prop('readonly', true);
        });

        // Fetch the total fees for the selected class
        var fee = $("option:selected", this).data("fee");
        totalElement.val(fee).prop('readonly', true);

        // Trigger the input event on the pay element to recalculate remaining and status
        $(this).closest('.bulk-student-form').find('.pay').trigger('input');
    });

    $(document).on('input', '.pay', function () {
        var payableAmount = parseFloat($(this).val()) || 0;
        var totalAmount = parseFloat($(this).closest('.bulk-student-form').find('.total').val()) || 0;
        var remainingElement = $(this).closest('.bulk-student-form').find('.remaining');
        var statusElement = $(this).closest('.bulk-student-form').find('.status');

        var remainingAmount = totalAmount - payableAmount;
        remainingElement.val(remainingAmount);

        var status = 'Remaining';
        if (payableAmount === totalAmount) {
            status = 'Paid';
        } else if (payableAmount > 0) {
            status = 'Remaining';
        } else if (payableAmount == 0) {
            status = 'Null';
        }

        statusElement.val(status);
    });
});

</script>
</body>
</html>


<?php



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {
    $full_name = isset($_POST['fname']) ? $_POST['fname'] : array();
    $parent_name = isset($_POST['pname']) ? $_POST['pname'] : array();
    $email = isset($_POST['email']) ? $_POST['email'] : array();
    $phne_number = isset($_POST['phone_no']) ? $_POST['phone_no'] : array();
    $birth_date = isset($_POST['dob']) ? $_POST['dob'] : array();
    $gender = isset($_POST['gender']) ? $_POST['gender'] : array();
    $address = isset($_POST['address']) ? $_POST['address'] : array();
    $class = isset($_POST['class']) ? $_POST['class'] : array();
    $roll_no = isset($_POST['rollno']) ? $_POST['rollno'] : array();
    $paid = isset($_POST['paid']) ? $_POST['paid'] : array();
    $total = isset($_POST['total']) ? $_POST['total'] : array();
    $remaining = isset($_POST['remaining']) ? $_POST['remaining'] : array();
    $status = isset($_POST['status']) ? $_POST['status'] : array();
    // echo ($count);
    // echo count($full_name);
    // die;

    $successCount = 0; // Counter for successful inserts
    // Loop through the arrays and insert each record
    for ($count = 0; $count <= count($full_name); $count++) { 

        // CODE DEBUGGING STYLE

        // echo '<pre>';
        // print_r($full_name);
        // print_r($count);
        // print_r($full_name[$count]);
        // echo($full_name[$count]);
        // echo($parent_name[$count]);
        // echo($email[$count]);
        // echo($phne_number[$count]);
        // echo($birth_date[$count]);
        // echo($gender[$count]);
        // echo($address[$count]);
        // echo($class[$count]);
        // echo($roll_no[$count]);

        
        // Check if the array key exists
        if (isset($full_name[$count], $parent_name[$count], $email[$count], $phne_number[$count], $birth_date       [$count], $gender[$count], $address[$count], $class[$count], $roll_no[$count], $paid[$count], $total[$count], $remaining[$count], $status[$count])) {
            $fullname_clean = mysqli_real_escape_string($conn, $full_name[$count]);
            $parent_name_clean = mysqli_real_escape_string($conn, $parent_name[$count]);
            $email_clean = mysqli_real_escape_string($conn, $email[$count]);
            $phne_number_clean = mysqli_real_escape_string($conn, $phne_number[$count]);
            $birth_date_clean = mysqli_real_escape_string($conn, $birth_date[$count]);
            $gender_clean = mysqli_real_escape_string($conn, $gender[$count]);
            $address_clean = mysqli_real_escape_string($conn, $address[$count]);
            $class_clean = mysqli_real_escape_string($conn, $class[$count]);
            $roll_no_clean = mysqli_real_escape_string($conn, $roll_no[$count]);
            $paid_clean = mysqli_real_escape_string($conn, $paid[$count]);
            $total_clean = mysqli_real_escape_string($conn, $total[$count]);
            $remaining_clean = mysqli_real_escape_string($conn, $remaining[$count]);
            $status_clean = mysqli_real_escape_string($conn, $status[$count]);

            // CODE DEBUGGING STYLE

            // echo "Processing record $count: ";
            // var_dump($fullname_clean, $parent_name_clean, $email_clean, $phne_number_clean, $birth_date_clean, $gender_clean, $address_clean, $class_clean, $roll_no_clean);


            if ($fullname_clean != '' && $parent_name_clean != '' && $email_clean != '' && $phne_number_clean != '' && $birth_date_clean != '' && $gender_clean != '' && $address_clean != '' && $class_clean != '' && $roll_no_clean != '' && $paid_clean != '' && $total_clean != '' && $remaining_clean != '' && $status_clean != '') 

            {
                $result = $conn->query ("INSERT INTO students (full_name, parent_name, email, phone_no, dob, gender, address, class, roll_no) VALUES ('$fullname_clean', '$parent_name_clean', '$email_clean', '$phne_number_clean', '$birth_date_clean', '$gender_clean', '$address_clean', '$class_clean', '$roll_no_clean')");

                if($result){
                    $successCount++;

                // Fetch the last inserted student ID
                $lastStudentID = mysqli_insert_id($conn);

                // Insert into fees table
                $conn->query("INSERT INTO fees (id, student_name, student_rollno, student_class, paid, total, remaining, status) VALUES ('$lastStudentID', '$fullname_clean', '$roll_no_clean', '$class_clean', '$paid_clean', '$total_clean', '$remaining_clean', '$status_clean')");
                }

                // $add_student_query = ("INSERT INTO students (full_name, parent_name, email, phone_no, dob, gender, address, class, roll_no) VALUES ('$fullname_clean', '$parent_name_clean', '$email_clean', '$phne_number_clean', '$birth_date_clean', '$gender_clean', '$address_clean', '$class_clean', '$roll_no_clean')");

                // CODE DEBUGGING STYLE
                // print_r($add_student_query);
                
                // $student_data = mysqli_query($conn, $add_student_query) or die(mysqli_error($conn));

               
            }
        }
    }
            // Check if at least one record was successfully inserted
            if ($successCount > 0) {
                echo "<script>alert('Students and fees added successfully');</script>";
                echo "<script>window.location.href = 'http://localhost/sms/manage-student.php';</script>";
            } else {
                echo "<script>alert('Unable to add data');</script>";
            }
}

?>