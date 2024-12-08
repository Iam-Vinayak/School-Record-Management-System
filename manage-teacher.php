<!-- Sidebar starts here -->

<?php  
    // Sidebar file 
    include('sidebar.php');
?>

<!-- Main content starts here  -->

<div class="main-content">

        <div class="name-of-page">
            Manage teacher

            <div class="search-box">
                    <div class="search-icon"></div>
                    <div class="search-input">
                        <input type="text" placeholder="Search..." id="searched-text">
                    </div>
                    <!-- <span class="clear" onclick="document.getElementById('searched-text').value = ''"></span> -->
                </div>

                <div class='add-text'>
                    <a href='add-teacher.php'>Add teacher</a>
                    <span><i class="fa-solid fa-plus"></i></span>    
                </div>
        </div>

        <hr>

<?php

$query = "SELECT * FROM teachers";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    if($total != 0)
    {
     ?>

<div class="table-container">

        <section class="manage-table" id="search-results">
            <table class="table-details" width="160%">
                <thead>
                <tr>
                        <th width="10%">Actions</th>
                        <th width="4%">Teacher ID</th>
                        <th width="12%">Full name</th>
                        <th width="5%">Qualification</th>
                        <th width="7%">Email</th>
                        <th width="%">Phone number</th>
                        <th width="10%">Date of birth</th>
                        <th width="%">Gender</th>
                        <th width="20%">Address</th>
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
                        <button class='update-icon'>
                            <div class='tooltip'>Update</div>
                            <a href='update-teacher.php?tr_id=$result[tr_id]'>
                            <span><i class='fa-solid fa-file-pen'></i></span>
                            </a>
                        </button>
                        <button onclick='return deleteRecord()' class='delete-icon'>
                        <div class='tooltip'>Delete</div>
                            <a href='delete-teacher.php?tr_id=$result[tr_id]' >
                            <span><i class='fa-solid fa-trash' aria-hidden='true'></i></span>
                            </a>
                        </button>
                    </div>
                    </td>
                    
                    <td>".$result['tr_id']."</td>
                    <td>".$result['full_name']."</td>
                    <td>".$result['qualification']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone_no']."</td>
                    <td>".$result['dob']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['address']."</td>
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

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to load all data when input is empty or cleared
        function loadAllData() {
            $.ajax({
                url: "./config/livesearch-teach.php",
                method: "POST",
                data: { input: '' }, // Send an empty input to retrieve all data
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
                url: "./config/livesearch-teach.php",
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

    // Clear search text function
    const icon = document.querySelector('.search-icon');
    const search = document.querySelector('.search-box');
    icon.onclick = function (){
        search.classList.toggle('active')
    }

    // Delete record function
    function deleteRecord() {
        return confirm("Are you sure you want to delete this record ?");
    }

</script>

</html>