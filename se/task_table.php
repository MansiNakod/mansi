<?php 
include 'database_connection.php';
$query="CREATE TABLE task(
    task_name text)";

    if(mysqli_query($con,$query)){
        echo "<script>alert('task table created sucessfully in database data_base')</script>";
    }
    else{
        echo "<script>alert('Error creating task table in database data_base')</script>";
    }
?>