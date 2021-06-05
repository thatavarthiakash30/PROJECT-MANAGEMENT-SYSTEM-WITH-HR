<?php
include 'connection.php';
$empid=$_GET['empid'];
$dquery = "DELETE FROM `users` WHERE empid='$empid'";
$query=mysqli_query($conn,$dquery);
if($query){
    ?>
    <script>
    alert("Deleted Successfully!");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("Data not deleted.Error Occured.");
    </script>
    <?php
}
header('Location:app-users.php');
?>