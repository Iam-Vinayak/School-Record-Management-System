<?php  
    // Sidebar file 
    include('sidebar.php');
?>

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

                <!-- <div class="column">
                    
                </div> -->

                    <div class="info-box">
                        <label for="">Class</label>
                        <div class="select-box">
                            <select name="class" id="class" >
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

                        <div class="info-box">
                            <label for="">Roll no</label>
                            <input type="number" id="rollno" placeholder="Enter the assigned roll no" name="rollno" required readonly>
                        </div>
                    </div>

                    <div class="column">
                        <div class="info-box">
                            <label for="">Payable amount</label>
                            <input type="number" id="pay" name="pay" placeholder="Enter your payable amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                            maxlength="5"required>
                        </div>

                        <div class="info-box">
                            <label for="">Total Amount</label>
                            <input type="number" id="total" name="total" readonly>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="info-box">
                            <label for="">Remaining Amount</label>
                            <input type="number" name="remaining" id="remaining" required>
                        </div>
                        <div class="info-box">
                            <label for="">Status</label>
                            <div class="select-box">
                                <select name="status" id="status" >
                                    <option value="" hidden>--Select--</option>
                                    <option value="Paid" >Paid</option>
                                    <option value="Remaining" >Remaining</option>
                                    <option value="Null" >Null</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="margin: 10px 0 0 0;">
                        <input type='checkbox' required/>
                        <i style="font-size: 15px;">The above student has submitted all the necessory document in the office</i>
                    </div>
                <button type="submit" value="add" name="add" class="add-btn">Submit</button>
            </form>
            
        </div>
    </div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#class').on('change', function () {
            var selectedClass = $(this).val();

            $.post('get_max_roll.php', { class: selectedClass }, function (data) {
                $('#rollno').val(data).prop('readonly', true);
            });
        });
    });


    $(document).ready(function () {
        $('#class').on('change', function () {
            var selectedClass = $(this).val();
            var fee = $("option:selected", this).data("fee");
            
            $('#total').val(fee).prop('readonly', true);
        });

        $('#pay').on('input', function () {
            var payableAmount = parseFloat($(this).val()) || 0;
            var totalAmount = parseFloat($('#total').val()) || 0;
            var remainingAmount = totalAmount - payableAmount;
            $('#remaining').val(remainingAmount);

            var status = 'Remaining';
            if (payableAmount === totalAmount) {
                status = 'Paid';
            } else if (payableAmount > 0) {
                status = 'Remaining';
            }
            else if (payableAmount == 0) {
                status = 'Null';
            }

            $('#status').val(status);
        });
    });


</script>
</body>
</html>


</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add'])) {

    $full_name = $_POST['fname'];
    $parent_name = $_POST['pname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_no'];
    $birth_date = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $roll_no = $_POST['rollno'];
    $payable_amount = $_POST['pay'];
    $total_amount = $_POST['total'];
    $remaining_amount = $_POST['remaining'];
    $status = $_POST['status'];

    // Insert the student into the students table
    $query_students = "INSERT INTO students (full_name, parent_name, email, phone_no, dob, gender, address, class, roll_no) VALUES ('$full_name', '$parent_name', '$email', '$phone_number', '$birth_date', '$gender', '$address', '$class', '$roll_no')";
    $result_students = mysqli_query($conn, $query_students);

    // Get the last inserted id
    $student_id = mysqli_insert_id($conn);

    // Insert the same student into the fees table with the same id
    $query_fees = "INSERT INTO fees (id, student_rollno, student_name, student_class, paid, total, remaining, status) VALUES ('$student_id', '$roll_no', '$full_name', '$class', '$payable_amount', '$total_amount', '$remaining_amount', '$status')";
    $result_fees = mysqli_query($conn, $query_fees);

    if($result_students && $result_fees) {
        echo "<script>alert('Student added successfully to both tables');</script>";
        echo "<script>window.location.href = 'http://localhost/sms/manage-student.php';</script>";
    } else {
        echo "<script>alert('Unable to add student data');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}


?>