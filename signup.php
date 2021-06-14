<?php 
    include('conn.php');
    $msg = "";
    // 
    if(isset($_POST['signup'])){
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($lastname == "" || $firstname == "" || $email == "" || $password == "" || $cpassword == "" ){
            $msg = '<p style="color: red; text-align: center;">Invalid parameters</p>';
        }else {
            if($password !== $cpassword){
                $msg = '<p style="color: red; text-align: center;">Password not matched</p>';
            }else {

                // hash
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $checkUser = "SELECT * FROM `users` WHERE `email` = '$email'";
                $rs = mysqli_query($sql, $checkUser);
                $count = mysqli_num_rows($rs) >0;
                if($count){
                    $msg = '<p style="color: red; text-align: center;">Email already exist</p>';
                } else {



                    $addUser = "INSERT INTO `users`(`id`, `lname`, `fname`, `email`, `password`, `cpassword`) VALUES (NULL,'$lastname','$firstname','$email','$hash','$hash')";

                    $result  = mysqli_query($sql, $addUser);
                    if($result){
                        session_start();
                        $_SESSION['user'] = $email;
                        header('Location: profile.php');
                    }else{
                        $msg = "Something went wrong";
                    }
                }
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <img src="./assets/bicrypto-logo.png" alt="Bi Crypto Logo" class="logo">
            
            <div class="form-container signup">
                <?php echo $msg;?>
                <h3>CREATE AN ACCOUNT</h3>
                <form action="signup.php" method="POST" class="form">
                    <form action="" class="form">
                        <input type="text" name="lastname" placeholder="Lastname">
                        <input type="text" name="firstname" placeholder="Firstname">
                        <input type="email" name="email" placeholder="Email address">
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" name="cpassword" placeholder="Confirm Password">
                        <button name="signup" type="submit">START &nbsp; <span class="fa fa-arrow-right"></span></button>
                </form>
                <p>Already have an account? <a class="navigate-btn" href="index.php">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>