<?php
$con=mysqli_connect("localhost","root","","data_base");

if(!$con){
    echo "<script>alert('Error in establishing error')</script>";
}
else{
    echo "<script>alert('Connection established successfully')</script>";
}
?>