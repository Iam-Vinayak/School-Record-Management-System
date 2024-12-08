<?php  
    // Sidebar file 
    include('sidebar.php');
?>


       <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Add parent
        </div>
        <hr>

        <div class="info-container">
            <form action="#" class="student-form">

                <!-- Personal information section starts here -->
                <div class="form-header">
                    <label for="">1. Personal information </label>
                </div>
                
                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Enter your full name" required>
                </div>

                <div class="info-box">
                    <label for="">Child's Name</label>
                    <input type="text" placeholder="Enter your child's name" required>
                </div>
                
                <div class="info-box">
                    <label for="">Email address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="column">
                    <div class="info-box">
                        <label for="">Mobile number</label>
                        <input type="number" placeholder="Enter your number" required>
                    </div>

                    <div class="info-box">
                        <label for="">Date of birth</label>
                        <input type="date" placeholder="Enter your date of birth" required>
                    </div>
                </div>

                <div class="gender-section">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" >
                            <label for="check-male">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender">
                            <label for="check-female">Female</label>
                        </div>
                    </div>
                </div>

                <div class="info-box address-box">
                    <label for="">Address</label>
                    <input type="text" placeholder="Enter your address" required>

                    <div class="column">
                        <div class="info-box">
                            <!-- <label for="">Email address</label> -->
                            <input type="email" placeholder="State" required>
                        </div>

                        <div class="info-box">
                            <!-- <label for="">Email address</label> -->
                            <input type="email" placeholder="Enter postal code" required>
                        </div>
                    </div>

                    <div class="column">
                        <!-- <label for="">Country</label> -->
                        <div class="select-box">
                            <select name="country" id="country" >
                                <!-- <option value="" hidden>Country</option> -->
                                <option value="" >India</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="add-btn">Submit</button>
            </form>
        </div>
            
    </div>




    
<!-- Footer starts here  -->
<?php include('footer.php')?>

</html>