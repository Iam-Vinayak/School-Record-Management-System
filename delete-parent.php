<?php  
    // Sidebar file 
    include('sidebar.php');
?>

    <!-- Main content starts here  -->

    <div class="main-content">

        <div class="name-of-page">
            Delete parent
        </div>
        <hr>

        <div class="info-container">
            <form action="#" class="update-form">

                <div class="form-header">
                   Select student or parent name to delete
                </div>
                

                <div class="update-column">
                    <div class="select-box">
                        <select name="country" id="country" >
                            <option value="" hidden>--Select student name--</option>
                            <option value="" >1st</option>
                            <option value="" >2nd</option>
                            <option value="" >3rd</option>
                            <option value="" >4th</option>
                            <option value="" >5th</option>
                            <option value="" >6th</option>
                            <option value="" >7th</option>
                            <option value="" >8th</option>
                            <option value="" >9th</option>
                            <option value="" >10th</option>
                        </select>
                    </div>

                    
                    <div class="select-box">
                        
                        <select name="country" id="country" >
                            <option value="" hidden>--Select parent name--</option>
                            <option value="" >501</option>
                            <option value="" >502</option>
                            <option value="" >503</option>
                            <option value="" >504</option>
                            <option value="" >505</option>
                            <option value="" >506</option>
                            <option value="" >507</option>
                            <option value="" >508</option>
                            <option value="" >509</option>
                            <option value="" >510</option>
                        </select>
                    </div>
                </div>

                <div class="info-box">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Enter your full name" required>
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

                    <div class="update-column">
                        <div class="info-box">
                            <!-- <label for="">Email address</label> -->
                            <input type="email" placeholder="State" required>
                        </div>

                        <div class="info-box">
                            <!-- <label for="">Email address</label> -->
                            <input type="email" placeholder="Enter postal code" required>
                        </div>
                    </div>

                    <div class="update-column">
                        <!-- <label for="">Country</label> -->
                        <div class="select-box">
                            <select name="country" id="country" >
                                <!-- <option value="" hidden>Country</option> -->
                                <option value="" >India</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="delete-btn">Delete</button>
            </form>
            
        </div>
    </div>

<!-- Footer starts here  -->
<?php include('footer.php')?>
</html>