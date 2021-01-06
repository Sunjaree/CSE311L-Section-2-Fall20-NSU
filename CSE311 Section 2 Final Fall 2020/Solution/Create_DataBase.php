<?php

$link = mysqli_connect("localhost","root","");

if(link==false){
    die("Error could not connect." .mysqli_connect_error());
}

$sql = "CREATE DATABASE final";
if(mysqli_query($link,$sql)){
    echo "Database Created Successfully!";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>