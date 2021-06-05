<?php
include 'connection.php';
$name=$_GET['name'];
$dquery = "DELETE FROM `emp_all` WHERE name='$name'";
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
header('Location:emp-all.php');
?>