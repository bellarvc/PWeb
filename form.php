<?php
header('location:contact.php');

$con = mysqli_connect("localhost", "root", "" , "project");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query = "INSERT INTO project VALUES('$name','$email','$subject','$message')";

mysqli_query($con, $query);
?>