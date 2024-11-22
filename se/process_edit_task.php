<?php 
include 'database_connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $old_task=$_POST['old_task'];
    $new_task=$_POST['new_task'];
   
    $query="UPDATE task SET task_name='$new_task' WHERE task_name='$old_task'";
    
    if(mysqli_query($con,$query)){
        echo "<script>alert('Task edited successfully')</script>";
        echo "<script>window.open('edit_task.html','_self')</script>";
    }
    else{
        echo "<script>alert('Error editing task')</script>";
    }
}
?>