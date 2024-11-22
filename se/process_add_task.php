<?php 
include 'database_connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $task_name=$_POST['task_name'];
   
    $query="INSERT INTO task(task_name) VALUES('$task_name')";
    
    if(mysqli_query($con,$query)){
        echo "<script>alert('Task saved successfully')</script>";
        echo "<script>window.open('add_task.html','_self')</script>";
    }
    else{
        echo "<script>alert('Error saving task')</script>";
    }
}
?>