<?php
include 'connection.php';
$reason=$_GET['reason'];
$dquery = "DELETE FROM `leavereq` WHERE reason='$reason'";
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
header('Location:emp-leave.php');
?>