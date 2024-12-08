<?php

include('./config/db_connect.php');
// include('header.php');

    $query = "SELECT * FROM students";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // $result = mysqli_fetch_assoc($data);
    // echo $total;
    // echo $result;
    
    // echo $result['full_name']." ".$result['parent_name']." ".$result['email']." ".$result['phone_no']." ".$result['dob']." ".$result['gender']." ".$result['address']." ".$result['class']." ".$result['roll_no'];
    
    if($total != 0)
    {
     ?>

<div class="table-container">
        <h1>Manage students</h1>

        <section class="manage-table">
        <table border="1" width="100%" class="table-details">
                <thead>
                <tr>
                        <!-- <th>Student ID</th> -->
                        <th width="10%">Full name</th>
                        <th width="5%">Class</th>
                        <th width="3%">Roll no</th>
                        <th width="10%">Email</th>
                        <th width="4%">Phone number</th>
                        <th width="5%">Date of birth</th>
                        <th width="3%">Gender</th>
                        <th width="25%">Address</th>
                        <th width="10%">Parent name</th>  
                </tr>
                </thead>
                <tbody>

        <?php

        while($result = mysqli_fetch_assoc($data))
        {
            echo "<tr>
                    <td>".$result['full_name']."</td>
                    <td>".$result['class']."</td>
                    <td>".$result['roll_no']."</td>                   
                    <td>".$result['email']."</td>
                    <td>".$result['phone_no']."</td>
                    <td>".$result['dob']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['address']."</td>
                    <td>".$result['parent_name']."</td>
                </tr>
                
                
                ";
        }
    }
    else
    {
        echo "No records found";
    }

?>
</tbody>
</table>
</section>
</div>

<!-- echo $result['full_name']." ".$result['parent_name']." ".$result['email']." ".$result['phone_no']." ".$result['dob']." ".$result['gender']." ".$result['address']." ".$result['class']." ".$result['roll_no']."<br>"; -->



