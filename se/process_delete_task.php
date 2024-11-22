<?php 
include 'database_connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $delete_task=$_POST['delete_task'];
   
    $query="DELETE FROM task WHERE task_name='$delete_task'";
    
    if(mysqli_query($con,$query)){
        echo "<script>alert('Task deleted successfully')</script>";
        echo "<script>window.open('delete_task.html','_self')</script>";
    }
    else{
        echo "<script>alert('Error deleting task')</script>";
    }
}
?>