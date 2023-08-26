
<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "" , "storedb");


// // Check connection
// if (!$conn) {
// die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



if(isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$q="INSERT INTO `users`(`name`,`email`,`password`) VALUES ('$name','$email','$password')";

mysqli_query($conn,$q);

header("location:signin.php");
}


?>