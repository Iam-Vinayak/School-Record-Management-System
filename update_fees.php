<?php  
include('./config/db_connect.php');
    // Sidebar file 
    include('sidebar.php');


?>

<!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Update fees
        </div>
        <hr>

        <div class="info-container">

            <form action="#" method="POST" class="update-form">

            <?php
            if (isset($_GET['id']))
            {
                $id = $_GET['id'];
                    $query = "SELECT * FROM students where id = '$id'";
                    $data = mysqli_query($conn, $query);
                    $result = mysqli_fetch_assoc($data);
                    // var_dump($data);
                    // var_dump($id);
                    // var_dump($query);
                    // die;
                    

                    // Fetch fee data
                    $fee_query = "SELECT * FROM fees WHERE id = '$id'";
                    $fee_data = mysqli_query($conn, $fee_query);
                    $fee_result = mysqli_fetch_assoc($fee_data);

                    // print_r($fee_result);
            }
            ?>

                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" value="<?php echo $result['full_name'];?>" name="fname" placeholder="Enter your full name" readonly>
                </div>

                <div class="info-box">
                    <label for="">Parent Name</label>
                    <input type="text" value="<?php echo $result['parent_name'];?>" name="pname" placeholder="Enter your parent's name" readonly>
                </div>
                
                <div class="info-box">
                    <label for="">Email address</label>
                    <input type="email" value="<?php echo $result['email'];?>" name="email" placeholder="Enter your email" readonly>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Mobile number</label>
                        <input type="number" value="<?php echo $result['phone_no'];?>" name="phone_no" placeholder="Enter your number" readonly>
                    </div>

                    <div class="info-box"> 
                        <label for="">Date of birth</label>
                        <input type="date" value="<?php echo $result['dob'];?>" name="dob" placeholder="Enter your date of birth" readonly>
                    </div>
                </div>

                <div class="gender-section">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" readonly
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
                            <input type="radio" id="check-female" name="gender" readonly
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
                    <input type="text" value="<?php echo $result['address'];?>" name="address" placeholder="Enter your address" readonly>
                </div>

                <div class="form-seperator">
                    <hr>
                </div>

                <!-- Social information section starts here -->
                <div class="form-header">
                    <label for="">2. Social information </label>
                </div>

                <div class="column">

                    <div class="info-box address-box">
                        <label for="">Class</label>
                        <input type="text" value="<?php echo $result['class'];?>" name="address" placeholder="Enter your class" readonly>
                    </div>

                    <div class="info-box">
                        <label for="">Roll no</label>
                        <input type="number" id="rollno" value="<?php echo $fee_result['student_rollno'];?>" name="rollno" placeholder="Enter the assigned roll no" required readonly>
                    </div>
                </div>
                    

                <div class="column">
                    <div class="info-box">
                        <label for="">Paid amount</label>
                        <input type="number" id="pay" name="paid" value="<?php echo $fee_result['paid']; ?>" placeholder="Enter your payable amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required>
                    </div>

                    <div class="info-box">
                        <label for="">Total Amount</label>
                        <input type="number" id="total" name="total" value="<?php echo $fee_result['total']; ?>" readonly>
                    </div>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Remaining Amount</label>
                        <input type="number" name="remaining" id="remaining" value="<?php echo $fee_result['remaining']; ?>" required>
                    </div>

                    <div class="info-box">
                        <label for="">Status</label>
                        <div class="select-box">
                            <select name="status" id="status">
                                <option value="Paid" <?php echo $fee_result['status']; ?>>Paid</option>
                                <option value="Remaining" <?php echo $fee_result['status']; ?>>Remaining</option>
                                <option value="Null" <?php echo $fee_result['status']; ?>>Null</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" value="update" name="update" class="update-btn">Update</button>
                
            </form>
            
        </div>
    </div>

<script>
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

</html>

<?php



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) 
{
    // var_dump($_POST);
    $paid = $_POST['paid'];
    $total = $_POST['total'];
    $remaining = $_POST['remaining'];
    $status = $_POST['status'];

    $update_fee_query = "UPDATE fees SET paid='$paid', total='$total', remaining='$remaining', status='$status' WHERE id='$id'";

    // $fee_data = mysqli_query($conn, $update_fee_query) or die(mysqli_error($conn));
    $fee_data = mysqli_query($conn, $update_fee_query);
    if (!$fee_data) {
        die("Error: " . mysqli_error($conn));
    }

    if ($fee_data) {
        echo "<script>alert('Fee information updated successfully');</script>";
        echo "<script>window.location.href = 'http://localhost/sms/manage_fees.php';</script>";
        exit; 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



?>



