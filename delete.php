<?php


error_reporting(0);

$hostname = "localhost";

$username = "root";

$password = "";

$db = "gaurav";


$conn = mysqli_connect($hostname , $username , $password , $db);



$id = $_GET['id'];

$delete = "DELETE FROM student WHERE email='$id' ";

$run = mysqli_query($conn , $delete);

if($run)
{
    header("location:main.php");
}

else{
    echo "deleting failed";
}








?>