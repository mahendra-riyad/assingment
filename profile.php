<?php
    $user=$_COOKIE["user"];
    if(!isset($user)) {
        header("location:index.php?id=logout");
    } else {
        include("database.php");
        $rs=mysqli_query($con,"select * from users where id='$user'");
        if($r=mysqli_fetch_array($rs)){
            ?>
            <head>
                
            </head>
            <body>
                <div class="container">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1558898479-33c0057a5d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $r[1]; ?></h4>
                            <p class="card-text"><?php echo $r[3]; ?></p>
                            <a href="logout.php" class="btn btn-primary stretched-link">Logout</a>
                        </div>
                    </div>
                </div>                
            </body>

            <?php
        }
    }

 ?>