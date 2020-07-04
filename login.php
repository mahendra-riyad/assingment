<?php 
    if(empty($_POST["email"]) || empty($_POST["password"])) {
        header("location:index.php?id=fill_all");
    } else {
        include("database.php");
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $rs=mysqli_query($con,"select * from users where username='$email'");
        if($r=mysqli_fetch_array($rs)){
           if($r[2] == $pass) {
                setcookie("user",$r[0],time()+3600);
                header("location:profile.php");
           } else {
                header("location:index.php?id=invalid");
           }
        } else {
             header("location:index.php?id=invalid");
        }
    }
?>