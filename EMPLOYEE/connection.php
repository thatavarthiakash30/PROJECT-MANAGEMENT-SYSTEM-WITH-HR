<?php 
$conn=mysqli_connect("localhost","root","","employee_side");
if($conn){
    ?>
    <?php
}
else{
    die("no connection" . mysqli_connect_error());
}
?>