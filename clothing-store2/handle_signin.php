<?php
session_start();

$conn = mysqli_connect("localhost", "root", "" , "storedb");

if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$qu="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

$run_query=mysqli_query($conn,$qu);

if( mysqli_num_rows($run_query)>0){

    $_SESSION['issignin']=true;
    header("location:main.php");
}
else{
    header("location:signin.php");
}

}


?>