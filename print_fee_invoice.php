<?php
// Connecton file
include('./config/db_connect.php');

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

// Adjust MPDF configuration
$mpdf = new \Mpdf\Mpdf(['margin_top' => 2, 'margin_bottom' => 0, 'margin_left' => 0, 'margin_right' => 0]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Recipt</title>
    <!-- <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/update.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/manage-bulk.css"> -->
    <!-- <link rel="stylesheet" href="./css/print_invoice.css"> -->
</head>
<body>
    


<!-- Main content starts here  -->

    <!-- <div class="print-main-content">
        <div class="print-info-container">
            <form action="#"  method="POST" class="print-form">

                <div class="invoice_header">
                    <div class="img_class" style="width: 15%; display: flex; justify-content: left; align-items: start">
                        <img src="./assets/invoice_logo.png" alt="Indian school" >
                    </div>
                    <div class="invoice_text" style="font-family: 'Poppins'; font-size: 32px; font-weight: 500; color: #4b5876;">
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
                        <p>Chiplun, Maharashtra,</p>
                        <p>India</p>
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
                
            </form>
            
        </div>
    </div> -->
    <div class="print-main-content">
        <div class="header_bg" style="width: 100%; height: 12%; background: #ebebeb">
            <div class="header_part">
                <div class="img_container">
                    <img src="assets/invoice_logo.jpg" alt="Indian school" style="width: 12%; margin-left: 42%;"  >
                </div>
            </div>
        </div>
        <div class="text_container" style="margin-left: 40%;">
            <h1>Invoice</h1>
        </div>
        <hr style="width: 90%; height: 5px; color: #b8b8bd">
        <div class="student_info">

            <p style="margin: 2% 0 2% 5%; font-size: 20px"><b>Date:</b> <?php echo date('d-m-Y');?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Student ID:</b><?php echo $student_result['id'];?></p>

            <p style="margin: 2% 0 2% 5%; font-size: 20px"><b>Time:</b> <?php date_default_timezone_set("Asia/Kolkata");echo date("h:ia");?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Roll no:</b> <?php echo $student_result['roll_no'];?></p>

            <!-- <p style="margin: 2% 0 0 5%; font-size: 20px"><b>Time:</b> <?php //date_default_timezone_set("Asia/Kolkata");echo date("h:ia");?></p> -->
            <!-- <p style="margin: 2% 0 0 5%; font-size: 20px"><b>Student ID:</b> </p> -->
            <!-- <p style="margin: 2% 0 0 5%; font-size: 20px"><b>Roll no:</b> <?php //echo $student_result['roll_no'];?></p> -->
            <hr style="width: 90%; height: 5px; color: #b8b8bd">
        </div>
        <div class="invoice_to">
            <h2 style="margin: 2% 0 0 5%">Fee receipt to:</h2>
            <p style="margin: 2px 0 0 5%; font-size: 20px">Class <?php echo $student_result['class'];?>,</p>
            <p style="margin: 2px 0 0 5%; font-size: 20px"><?php echo $student_result['full_name'];?>,</p> 
            <p style="margin: 2px 0 0 5%; font-size: 20px"><?php echo $student_result['address'];?>,</p>
            <p style="margin: 2px 0 1% 5%; font-size: 20px">India.</p>
            <!-- <hr style="width: 90%; height: 5px; color: #b8b8bd"> -->
        </div>

        <hr style="width: 90%; height: 5px; color: #b8b8bd">


        <table class="invoice-table-details" width="95%" style="margin: 2% 0 0 5%; font-size: 20px" border=1>
                        <thead>
                        <tr>
                                <th width="25%">Description</th>
                                <th width="%" style="text-align: center;">Paid</th>
                                <th width="%">Remaining</th>
                                <th width="%">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuition Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Transportation Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Book and Supplies Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Uniform Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Technology Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lunch or Cafeteria Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lab Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Field Trip Fee</td>
                                <td style="text-align: center;"><?php echo $fee_result['paid']/8;?>/-</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Paid Amount</th>
                                <th><?php echo $fee_result['paid'];?>/-</th>
                                <th><?php echo $fee_result['remaining'];?>/-</th>
                                <th><?php echo $fee_result['status'];?>/-</th>
                            </tr>                          
                        </tbody>
            </table>
    </div>

    <div class="footer_signature">
        <h2 style="margin: 7% 0 0 69%;">Signature of Head:</h2>
        <img src="assets/my_signature.jpg" alt="Signature" style="width: 20%; margin: 5px 0 0 75%;">
    </div>


</body>
</html>



