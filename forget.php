<form method="post">




Email <input type="email" name="email" value=""> <br> <br>

Password <input type="password" name="password" value=""> <br> <br>

Conform Password <input type="password" name="conformpassword" value=""> <br> <br>


 <input type="submit" name="reset" value="Reset"> <br> <br>


</form>


<?php

error_reporting(0);

$hostname = "localhost";

$username = "root";

$password = "";

$db = "gaurav";


$conn = mysqli_connect($hostname , $username , $password , $db);





if($_POST['reset'])
{
    
    $em = $_POST['email'];
    $pa = $_POST['password'];
    $cpa = $_POST['conformpassword'];

    if($em!=" " && $pa!=" " && $cpa!=" ")
    {
        $update = "UPDATE student SET email='$em' , password='$pa' , conformpassword='$cpa' WHERE email='$em' "  ;

        $run = mysqli_query($conn , $update);

        if($run)
        {

            echo  "update succesfull";
            
            
        }

        else 
        {
            echo "all filled require" . mysqli_error($conn);
        }
    }

}

else{
    echo "updating failed" . mysqli_error($conn) ;
}





?>



<a href="main.php">  login </a>