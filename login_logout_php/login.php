<?php

session_start();

?>


<?php
include("connection.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="" type="text/css" href="./css/style.css">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='stylesheet' type='text/css' media='screen' href=''>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style title="css/text">
       

    </style>
    <title>Document</title>


</head>
<body>

    <?php include "header.php" ?>
        <div class="container mt-auto">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 set">

                
            <form class="mt-auto" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="title">
                Login Now
            </div>
            <div class="form">
            <div class="input_field">
                    <label>Email </label>
                    <input type="text" class="input" name="email" required>
                </div>


                <div class="input_field">
                    <label>Password</label>
                    <input type="text" class="input" name="password" required>
                </div>
            
                
               
                <div class="input_field">
                    <input type="submit" value="Login Now" class="btn btn-primary" name="submit">
                </div>

                
            </div>
        </div>
        </div>
        </div>
        </form>
    </div>
</body> 
</html>

<?php

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from registation where email='$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "login successful";

            ?>

                <script>
                    location.replace("home.php");
                </script>
            <?php

        }else{
            echo "password incorrect";

        }
    }else{
        echo "Invalid email";
    
    }
}

?>