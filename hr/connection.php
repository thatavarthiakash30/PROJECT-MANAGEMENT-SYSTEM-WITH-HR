<?php 
$conn=mysqli_connect("localhost","root","","hr_side");
if($conn){
    ?>
    <?php
}
else{
    die("no connection" . mysqli_connect_error());
}
?>