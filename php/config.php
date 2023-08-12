<?php 
    $connection = mysqli_connect("localhost", "root", "", "chatapp"); // Establishing Connection with Server
    if(!$connection){ // Check connection
        echo "Error : Database not connected" . mysqli_connect_error();
    }
?>