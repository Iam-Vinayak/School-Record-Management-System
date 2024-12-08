<?php
session_start();

// Connecton file
include('./config/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <!-- <Header> -->

    <section class="login-bg">
        <div class="login_form_container">
            <!-- Login Form -->
            <form action="#" method="POST">
                <h2>Login</h2>

                <div class="input_area">
                    <input type="text", name="username" placeholder="Enter your username" required>
                    <i class="fa-regular fa-envelope email"></i>
                </div>
                <div class="input_area">
                    <input type="password", name="password" placeholder="Enter your password" id="password" required>
                    <i class="fa-solid fa-lock password"></i>
                    <img src="./assets/eye_close.png" id="eyeicon">
                </div>
                <!-- <div class="option_field">
                    <a href="#" class="forgot_pswd">Forgot password ?</a>
                </div> -->
                <button type="submit" name="login" class="login-btn">Login</button>
                <!-- <div class="login_signup">Doesn't have an account ? <a href="#" id="signup">SignUp</a></div> -->
            </form>
        </div>
    </section>
</body>

<script>
    
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function (){
        if(password.type == "password"){
            password.type = 'text';
            eyeicon.src = "./assets/eye_open.png";
        }
        else {
            password.type = "password";
            eyeicon.src = "./assets/eye_close.png";
        }
    }



</script>

</html>

<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login_query = "SELECT * FROM admin WHERE username = '$username' && password = '$password' ";
        $data = mysqli_query($conn, $login_query);
        $total = mysqli_num_rows($data);

        if($total == 1)
        {
            $_SESSION['username'] = $username;
            // echo "<script>alert('Logged in successfully');</script>";
            // echo "<script>
            //         window.location.href = 'http://localhost/sms/index.php';
            //     </script>";

            header('location:http://localhost/sms/index.php');
        }
        else {
            echo "<script>alert('Login failed. Please check your username & password');</script>";
        }
    }
?>