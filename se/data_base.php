<?php
include 'database_connection.php';
$query="CREATE DATABASE data_base";

if(mysqli_query($con,$query)){
    echo "<script>alert('Database data_base created')</script>";
}
else{
    echo "<script>alert('Error creating database')</script>";
}
?>