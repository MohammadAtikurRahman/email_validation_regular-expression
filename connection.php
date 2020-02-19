<?php


$gender = "";
$name = "";
$email = "";
$message = "";

$errors = array();




// Create connection
$db = mysqli_connect('localhost', 'root', '', 'form');


// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if (isset($_POST['register'])) {
    
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $name = mysqli_real_escape_string($db, $_POST['name']);


    $email = mysqli_real_escape_string($db, $_POST['email']);


    $message = mysqli_real_escape_string($db, $_POST['message']);


        $sql = "INSERT INTO message (gender , name , email ,message) 
  	
  	       VALUES('$gender', '$name', '$email', '$message')";


          mysqli_query($db, $sql);




    }









?>