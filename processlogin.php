<?php

$hostname = "localhost";

$username = "root";

$password = "";

$db = "gaurav";

$conn = mysqli_connect($hostname , $username , $password , $db);

$select = "SELECT * FROM student where email = '".$_REQUEST['email']."' and password = '".$_REQUEST['password']."'";

$run = mysqli_query($conn , $select);

$data = mysqli_fetch_assoc($run);

if($data)
{
    header("Location: welcome.php?name=".$data['name']."");
}else{
    echo "Wrong Password & Email";
    echo "<a href='main.php'>Back</a>";
}



?>