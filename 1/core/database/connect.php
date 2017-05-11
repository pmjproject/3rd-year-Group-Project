<?php

//connect to the database

 $conn= mysqli_connect('localhost','root','','hrs');

 //check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

?>
