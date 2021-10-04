
<form action="processlogin.php " method="post"  >




Email <input type="email" name="email" value=""> <br> <br>

Password <input type="password" name="password" value=""> <br> <br>


 <input type="submit" name="login" value="login"> <br> <br>

<a href="reg.php">  Registration  </a> <br> <br>

<a href="forget.php">  Forget Password </a> <br> <br>   


</form>



<table>


<tr>
    <th> Name </th>
    <th> Email </th>
    <th> Password</th>
    <th> Conform Password</th>
</tr>




<?php

error_reporting(0);

$hostname = "localhost";

$username = "root";

$password = "";

$db = "gaurav";


$conn = mysqli_connect($hostname , $username , $password , $db);

$select = "SELECT * FROM student";

$run = mysqli_query($conn , $select);


while($display = mysqli_fetch_assoc($run))
{
?>

<tr>
    <td> <?php  echo $display['name']; ?>  </td>
    <td> <?php  echo $display['email']; ?> </td>
    <td> <?php  echo $display['password']; ?> </td>
    <td> <?php  echo $display['conformpassword']; ?> </td>
    <td > <a href="delete.php?id=<?php  echo $display['email'];      ?>"> delete </a> </td>
</tr>


<?php

}

?>
</table>
