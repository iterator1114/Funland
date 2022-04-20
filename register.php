<?php
$showAlert = false;
$showErrorUser = false;
$showErrorPass = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    
    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showErrorUser = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `email`, `mobile`, `cpassword`, `dt`) VALUES ('$username', '$hash', '$email', '$mobile', '$cpassword', 'current_timestamp()')";

            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showErrorPass = "Passwords do not match";
        }
    }
}
    
?>


<!DOCTYPE html>
<html>

<head>
    <title>SignUp Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000428">
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font-Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- StyleSheet Link -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container" style="height:570px;">
        <?php if($showAlert){ ?>
                <script>swal("Success!", "Your account is created!, You can now log in.", "success")</script>
        <?php } ?>
        <?php if($showErrorUser){ ?>
                <script>swal("Error!","Username Already Exists", "error")</script>
        <?php } ?>
         <?php if($showErrorPass){ ?>
                <script>swal("Error!","Passwords do not match", "error")</script>
        <?php } ?>
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <form class="form text-center" action="" method="post">
                            <header>Sign Up</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="inp" type="text" name="username" placeholder=" Enter your Username" id="username"
                                    required>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <input class="inp" name="mobile" placeholder="Enter your Mobile Number" type="text" id="mobile" required>
                            </div>

                            <div class="form-group">
                              <i class="fas fa-envelope"></i>
                              <input class="inp" name="email" placeholder="Enter Your Email" type="email" id="email" required>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="inp" name="password" type="password" id="password" placeholder="Enter Your Password"
                                    required>
                            </div>

                            <div class="form-group">
                              <i class="fas fa-lock"></i>
                              <input class="inp" name="cpassword" type="password" id="cpassword" placeholder="Re-Enter Your Password"
                                  required>
                            </div>
                            <div>
                                <a href="login.php"><input type="submit" class="btn" value="signup"></a>
                            </div>
                        </form>
                        <h4 class="submit" style="font-size: 16px; text-align: center; padding: 20px;">Registered? <a style="color: #004e92; text-decoration: none;" href="login.php">Login now!</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>