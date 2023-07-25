<?php
    $con = mysqli_connect('localhost','root','','project1');

    if($con){
        echo "conection successful";
    }
    else{
        echo "no conection";
    }



    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_post['comment'];

    $query = "INSERT INTO userinfodata (user, email, mobile, comment) 
    VALUES ('$user','$email','$mobile','$comment') ";

    mysqli_query($con,$query);

    header('location:index.php');

?>