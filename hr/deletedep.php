<?php
include 'connection.php';
$dept_name=$_GET['dept_name'];
$dquery = "DELETE FROM `department` WHERE dept_name='$dept_name'";
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
header('Location:emp-departments.php');
?>