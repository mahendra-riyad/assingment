<?php 
    include("database.php");

    if(empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["cpass"]) || empty($_POST["about"])) {
        header("location:index.php?id=fill_all");
    } else {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $about = $_POST["about"];

        if($pass != $cpass) {
            header("location:index.php?id=mismatch");
        } else {
            $rs=mysqli_query($con,"select username from users where username='$email'");
            if($r=mysqli_fetch_array($rs)){
                header("location:index.php?id=valid_mail");
            } else {
                //Randam code
                $a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
                $b=array_rand($a,10);
                $id="";
                for($i=0;$i<sizeof($b);$i++){
                    $id=$id.$a[$b[$i]];
                }

                mysqli_query($con,"insert into users values('$id', '$email', '$pass', '$about')");
                setcookie("user",$id,time()+3600);
                header("location:profile.php");
            }
        }
    }

?>