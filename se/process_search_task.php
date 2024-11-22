<?php
include 'database_connection.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $query="SELECT * FROM task";

    $result=mysqli_query($con,$query);
    
    while($row=mysqli_fetch_array($result)){
        echo $row['task_name']."<br>";
    }
}
?>