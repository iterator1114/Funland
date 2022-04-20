<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: index.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page </title>
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
    
    <div class="container" style="height:450px;">
        <?php if($login){ ?>
                <script>swal("Success!", "You are logged in!", "success")</script>
        <?php } ?>
        <?php if($showError){ ?>
                <script>swal("Error!","Invalid Credentials", "error")</script>
        <?php } ?>
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <form class="form text-center"  action="" method="post">
                            <header>Login</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="inp" name = "username" type="text" placeholder=" Enter your Username" id="username"
                                    required>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="inp" type="password" name = "password" id="password" placeholder="Enter Your Password"
                                    required>
                            </div>
                            <div>
                                <a href="login.php"><input type="submit" class="btn" value="login"></a>
                            </div>
                        </form>
                        <h4 class="submit" style="font-size: 16px; text-align: center; padding: 20px;">Not registered? <a style="color: #004e92; text-decoration: none;" href="register.php">Create an account</a></h4>
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