<form method="post">


Name <input type="text" name="name" value="">  <br> <br>

 
Email <input type="email" name="email" value=""> <br> <br>

Password <input type="password" name="password" value=""> <br> <br>

Conform Password <input type="password" name="conformpassword" value=""> <br> <br>


 <input type="submit" name="submit" value="submit"> <br> <br>


</form>


<?php

error_reporting(0);

$hostname = "localhost";

$username = "root";

$password = "";

$db = "gaurav";


$conn = mysqli_connect($hostname , $username , $password , $db);


if($_POST['submit'])
{
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $pa = $_POST['password'];
    $cpa = $_POST['conformpassword'];

    if($nm!=" " && $em!=" " && $pa!=" " && $cpa!=" ")
    {
        $insert = "INSERT INTO student VALUES ('$nm' , '$em' , '$pa' , '$cpa' ) ";

        $run = mysqli_query($conn , $insert);

        if($run)
        {

            echo  "registration succesfull";
            
            
        }

        else 
        {
            echo "all filled require" . mysqli_error($conn);
        }
    }

}

else{
    echo "inserting failed" ;
}




?>



            <a href="main.php">  login </a>
            
            