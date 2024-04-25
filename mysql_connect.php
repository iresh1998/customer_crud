<?php
$con = new mysqli('localhost',
    'root','admin','customer_crud');
if (!$con){
    die(mysqli_error($con));
}
?>