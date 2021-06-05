<?php
include 'connection.php';
$proj_name=$_GET['proj_name'];
$dquery = "DELETE FROM `project_details` WHERE proj_name='$proj_name'";
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
header('Location:project-list.php');
?>