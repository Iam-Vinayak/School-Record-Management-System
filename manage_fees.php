<!-- Sidebar starts here -->

<?php  
    // Sidebar file 
    include('sidebar.php');
?>

<!-- Main content starts here  -->

<div class="main-content">

        <div class="name-of-page">
            Manage Fees

                <div class="bulk-search-box">
                    <div class="bulk-search-icon"></div>
                    <div class="bulk-search-input">
                        <input type="text" placeholder="Search..." id="searched-text">
                    </div>
                </div>

                <!-- <div class='add-text'>
                    <a href='add-student.php'>Add students</a>
                    <span><i class="fa-solid fa-plus"></i></span>    
                </div> -->
        </div>

        <hr>
<?php

$query = "SELECT * FROM fees";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    if($total != 0)
    {
     ?>

<div class="table-container">

        <section class="manage-table" id="search-results">
                <table class="table-details" width="100%" >
                    <thead>
                    <tr>
                        <th width="5%">Actions</th>
                        <th width="8%">Student ID</th>
                        <th width="15%">Full name</th>
                        <th width="8%">Roll no</th>
                        <th width="4%">Class</th>
                        <th width="4%">Paid</th>
                        <th width="4%">Total</th>
                        <th width="1%">Remaining</th>
                        <th width="4%">Status</th>
                    </tr>
                    </thead>
                    <tbody>

            <?php

            while($result = mysqli_fetch_assoc($data))
            {
                
                echo

                "<tr>
                
                <td>
                <div class='wrapper'>
                    <button class='edit-icon'>
                        <div class='tooltip'>Edit</div>
                        <a href='update_fees.php?id=$result[id]'>
                        <span><i class='fa-solid fa-pen-to-square' aria-hidden='true'></i></span>
                        </a>
                    </button>

                    <button class='print-icon'>
                        <div class='tooltip'>Print</div>
                        <a href='print_student_invoice.php?id=$result[id]'>
                        <span><i class='fa-solid fa-print'></i></span>
                        </a> 
                    </button>
                </div>
                </td>
                <td>".$result['id']."</td>                   
                <td>".$result['student_name']."</td>
                <td>".$result['student_rollno']."</td>                   
                <td>".$result['student_class']."</td>
                <td>".$result['paid']."</td>
                <td>".$result['total']."</td>
                <td>".$result['remaining']."</td>
                <td>".$result['status']."</td>

                    </tr>
                    ";
            }
        }
        else
        {
            echo "<div style='display: flex; justify-content: center; align-items: center; margin: 0px; padding: 0px;'>
            <img src='./assets/no-data4.webp' alt='No data found' style='width: 60%; height: auto;'>
            </div>;
            <div style='display: flex; justify-content: center; align-items: center; color: #396aff; font-size: 40px; ; font-weight: 700; margin: 0px; padding: 0px;'>
            No data found
            </div>";
        }

    ?>
                </tbody>
            </table>
        
    </section>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

$(document).ready(function () {
        // Function to load all data when input is empty or cleared
        function loadAllData() {
            $.ajax({
                url: "./config/manage_fees_search.php",
                method: "POST",
                data: { input: '' },
                success: function (data) {
                    $("#search-results").html(data);
                },
            });
        }
        
    // Ajax query for live search
    $("#searched-text").keyup(function () {
        var input = $(this).val();
        if (input !== "") {
            $.ajax({
                url: "./config/manage_fees_search.php",
                method: "POST",
                data: { input: input },
                success: function (data) {
                    $("#search-results").html(data);
                },
            });
        } else {
            // Load all data when input is empty or cleared
            loadAllData();
        }
    });

    // Initial load of all data
    loadAllData();
});



    // Active function when clicked
    const bulk_icon = document.querySelector('.bulk-search-icon');
    const bulk_search = document.querySelector('.bulk-search-box');
    bulk_icon.onclick = function () {
        bulk_search.classList.toggle('active');
    }

    // Delete record function
    function deleteRecord() {
        return confirm("Are you sure you want to delete this record ?");
    }

</script>

</html>