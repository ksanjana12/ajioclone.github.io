<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$address=$_POST['address'];
$con=@mysqli_connect('localhost','root','','ajio');
$query="insert into ajiouser values('$fname','$lname','$email','$gender','$password','$address')";
$result=mysqli_query($con,$query);
if ($result)
{
    echo "Data inserted Successfully";
}
else
{
    echo "Data not inserted successfully";
}
?>
<html>
    <body bgcolor="#A9A9A9">
        <?php
        if ($result==1){
            ?>
    <center><table><tr><td><h2> <i>Your registered email id is: </i></h2><?php echo $email;?></td></tr>
            <tr><td><h2> <i>Your password is: </i></h2> <?php echo $password;?></td></tr></table></center>
        <?php
        }
        ?>
    </body>
</html>
