<?php
$connection = mysqli_connect("localhost:3307", "root", "", "testdb");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    
    // echo "Connected";
}
?>
