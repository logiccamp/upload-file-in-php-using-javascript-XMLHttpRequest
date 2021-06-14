<?php 
include('conn.php');


    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user'] == ""){
        header('Location: index.php');
    }else {
        $user = $_SESSION['user'];
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page - BiCrypto</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="logout">
        <a href="logout.php"><img src="./assets/switch.png" alt="Logout icon"></a>
    </div>


    <?php 

        $checkUser = "SELECT * FROM `users` WHERE `email` = '$user'";
        $result = mysqli_query($sql, $checkUser);
        $counUser = mysqli_num_rows($result) > 0;
        if(!$counUser){
            echo "<script>alert('Please login first')</script>";
            echo "<script>window.location.assign('./')</script>";
        }

        if($counUser){
            while($row = mysqli_fetch_assoc($result)){
        
        ?>
            
        <div class="container">
            <div class="sidebar">
                <div class="user">
                    <img src="./assets/buffett.jpg" alt="user profile picture" class="img">
                    <h3><?php echo $row['fname'] . " " . $row['lname']; ?></h3>
                    <p><?php echo $row['title'];?></p>
                </div>
                
                <div class="skills">
                    <p class="title">Skills</p>
                    <p class="skill"><?php echo $row['skills'];?> </p>
                </div>

                <div class="action">
                    <center>
                        <a href="edit-profile.php" class="edit-btn">Edit Profile</a>
                    </center>
                </div>
            </div>

            <div class="page">
                <div class="header">
                    <img src="./assets/bicrypto-logo.png" alt="LOGO">
                </div>
                <div class="page-inner">
                    <div class="about">
                        <h3>About</h3>
                        <p><?php echo $row['about'];?></p>
                    </div>
                    <div class="contact">
                        <h3>Contact</h3>
                        <a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a> <br /> <br />
                        <a class="tel"><?php echo $row['telephone'];?></a>
                    </div>
                </div>
            </div>
        </div>

    <?php 
            }
        }


    ?>
</body>
</html>