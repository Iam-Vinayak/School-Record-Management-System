<?php   
    // Sidebar file 
    include('sidebar.php');
?>

<!-- Main content starts here  -->

    <div class="print-main-content">
        <div class="print-info-container">
            <form action="#"  method="POST" class="print-form">

            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Fetch student data
                    $query = "SELECT * FROM students WHERE id = '$id'";
                    $data = mysqli_query($conn, $query);
                    $total = mysqli_num_rows($data);
                    $student_result = mysqli_fetch_assoc($data);

                    // Fetch fee data
                    $fee_query = "SELECT * FROM fees WHERE id = '$id'";
                    $fee_data = mysqli_query($conn, $fee_query);
                    $fee_result = mysqli_fetch_assoc($fee_data);
                }
                ?>

                <div class="invoice_header">
                    <div class="img_class">
                        <img src="./assets/invoice_logo.png" alt="Indian school">
                    </div>
                    <div class="invoice_text">
                        <p>Invoice</p>
                    </div>
                </div>

                <br>
                <hr style="width: 100%; background: #dbdbdb; text-decoration: none; outline: none; height: 3px; border-radius: 0%; border: none;">

                <div class="invoice_header">
                    <div class="invoice_subtext">
                        <p><b>Date:</b> <?php echo date('d-m-Y');?></p>
                        <p><b>Time:</b> <?php date_default_timezone_set("Asia/Kolkata");echo date("h:ia");?></p>
                    </div>

                    <div class="invoice_subtext1">
                        <p><b>Student ID:</b> <?php echo $student_result['id'];?></p>
                        <p><b>Roll no:</b> <?php echo $student_result['roll_no'];?></p>
                    </div>
                </div>

                <br>
                <hr style="width: 100%; background: #dbdbdb; text-decoration: none; outline: none; height: 3px; border-radius: 0%; border: none;">

                <div class="invoice_header">
                    <div class="invoice_content">
                        <p><b>Invoice To:</b> <br> 
                        <p>Class <?php echo $student_result['class'];?>,</p>
                        <?php echo $student_result['full_name'];?>,</p> 
                        <p><?php echo $student_result['address'];?>,</p>
                        <p>India</p>
                    </div>

                    <div class="invoice_content" style="text-align: right;">
                        <p><b>Pay to:</b> <br> Comittee of School of India,</p>
                        <p>Address: Atkoneshwar Nagar, 1, Kalwa, Thane, Maharashtra 400605, India</p>
                        <p>schoolofindia@gmail.com</p>
                    </div>
                </div>

                <div class="invoice-table">
                    <table class="invoice-table-details" width="100%">
                        <thead>
                        <tr>
                                <th width="%">Description</th>
                                <th width="14%">Paid</th>
                                <th width="14%">Remaining</th>
                                <th width="14%">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuition Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Transportation Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Book and Supplies Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Uniform Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Technology Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lunch or Cafeteria Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lab Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Field Trip Fee</td>
                                <td><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>Paid Amount</th>
                                <th><?php echo $fee_result['paid'];?>/-</th>
                                <th></th>
                                <th></th>
                            </tr>                          
                        </tbody>
            </table>
            
            <hr style="width: 100%; background: #dbdbdb; text-decoration: none; outline: none; height: 3px; border-radius: 0%; border: none; margin:0; padding:0;">


                <div class="invoice_header">

                    <div class="invoice_below_content">
                            <p><h4>Payment Mode:</h4>
                                <p>Cash</p>
                            </p> <br>
                            <p><h4>Gpay number:</h4> 
                                <p>9769283919</p>
                            </p> <br>
                            <p><h4>UPI ID:</h4> 
                                <p>siddhivishwakarma391-1@okaxis</p>
                            </p> 
                        </div>

                    <div class="invoice_below_content">

                        <table class="invoice-secondary-table" width="100%">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td><?php echo $fee_result['paid'];?>/-</td>
                                        
                                </tr>
                                <tr>
                                    <th>Total Fees</th>
                                    <th><?php echo $fee_result['total'];?>/-</th>
                                </tr>
                                <tr>
                                    <td>Amount paid</td>
                                    <td><?php echo $fee_result['paid'];?>/-</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?php echo $fee_result['status'];?>/-</td>
                                </tr>                
                                <tr>
                                    <th>Balance Due</th>
                                    <td><?php echo $fee_result['remaining'];?>/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            
            </div>

                <div class='print-btn'>
                    <span><i class="fa-solid fa-print"></i></span>    
                    <a href="print_invoice_pdf.php?id=<?php echo $student_result['id']; ?>">Print</a>

                </div>
                
            </form>
            
        </div>
    </div>


</html>



