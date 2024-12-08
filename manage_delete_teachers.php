<?php  
    // Sidebar file 
    include('sidebar.php');
?>

    <!-- Main content starts here  -->

<div class="main-content">

        <div class="name-of-page">
            Bulk delete teachers

            <div class="bulk-search-box">
                <div class="bulk-search-icon"></div>
                <div class="bulk-search-input">
                    <input type="text" placeholder="Search..." id="bulk-searched-text">
                </div>
            </div>

        </div>

        <hr>
 

<div class="bulk-table-container">

        <section class="bulk-manage-table" id="bulk-search-results">
        
        <form method="post" action="bulk_delete_teachers.php" id="bulk-delete-form">

            <button type="submit" onclick='return deleteRecord()' id="delete_all_records" class='delete-records' name='delete_multiple_teachers_btn'>
                <a>Delete</a>
                <span><i class='fa-solid fa-trash' aria-hidden='true'></i></span>
            </button>

                <table class="bulk-table-details" width="180%">
                    <thead>
                        <tr>
                        <th width="8%">Select all <br> <div class="delete_checkbox"><input type='checkbox' id='checkAll' name='delete_multiple_teachers_id[]' value='';></div></th>
                        <th width="4%">Teacher ID</th>
                        <th width="12%">Full name</th>
                        <th width="10%">Qualification</th>  
                        <th width="14%">Email</th>
                        <th width="%">Phone number</th>
                        <th width="10%">Date of birth</th>
                        <th width="%">Gender</th>
                        <th width="20%">Address</th> 
                        </tr>
                    </thead>
                    <tbody>

            <?php

                $query = "SELECT * FROM teachers";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
    
                if($total != 0)
                    {
                        foreach ($data as $result) {

            ?>
                <tr> 
                    <td>
                    <div class="delete_checkbox"><input type='checkbox' class='checkbox_item' name='delete_multiple_teachers_id[]' value='<?=  $result['tr_id'];?>'/> </div>
                    </td>
                    <td><?= $result['tr_id']; ?></td>
                    <td><?= $result['full_name']; ?></td>
                    <td><?= $result['qualification']; ?></td>
                    <td><?= $result['email']; ?></td>
                    <td><?= $result['phone_no']; ?></td>
                    <td><?= $result['dob']; ?></td>
                    <td><?= $result['gender']; ?></td>
                    <td><?= $result['address']; ?></td>
            </tr>
    <?php
        }
    }
    ?>

                </tbody>
            </table>
        
    </section>

</div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

    // $(document).ready(function () {
        // Function to load all data when input is empty or cleared
        // $(document).ready(function () {
         // Function to load all data when input is empty or cleared
         function loadAllData() {
            $.ajax({
                url: "./config/bulk_delete_search_teachers.php",
                method: "POST",
                data: { input: '' },
                success: function (data) {
                    $("#bulk-delete-form").html(data);
                },
            });
        }

         // Ajax query for live search
        $("#bulk-searched-text").keyup(function () {
            var input = $(this).val();
            if (input !== "") {
                $.ajax({
                    url: "./config/bulk_delete_search_teachers.php",
                    method: "POST",
                    data: { input: input },
                    success: function (data) {
                        $("#bulk-delete-form").html(data);
                    },
                });
            } else {
                // Load all data when input is empty or cleared
                loadAllData();
            }
        });

    //     // Initial load of all data
        loadAllData();
    // });

    // Active function when clicked
    const bulk_icon = document.querySelector('.bulk-search-icon');
    const bulk_search = document.querySelector('.bulk-search-box');
    bulk_icon.onclick = function () {
        bulk_search.classList.toggle('active');
    }

    // Select all records at once
    $(document).ready(function () {
        $('#checkAll').click(function () {
            if ($(this).is(':checked')) {
                $('.checkbox_item').prop('checked', true);
            } else {
                $('.checkbox_item').prop('checked', false);
            }
        });
    });

    // Delete record function
    function deleteRecord() {
        var checkedCheckboxes = $('.checkbox_item:checked');
        if (checkedCheckboxes.length === 0) {
            alert("Please select at least one record to delete.");
            return false; // Prevent the form from being submitted
        } else {
            var confirmDelete = confirm("Are you sure you want to delete this record ?");
            if (confirmDelete) {
                // User clicked "OK," submit the form
                $('#bulk-delete-form').submit();
            } else {
                // User clicked "Cancel," do nothing
                return false; // Prevent the form from being submitted
            }
        }
    }
</script>

</html>



