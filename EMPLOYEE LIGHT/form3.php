<?php 
    include 'connection.php';
    if(isset($_POST['Updates'])){
        $emp_id=$_POST['emp_id'];
        $skills=$_POST['skills'];
        $fn=$_FILES['skillf']['name'];
        $tm=$_FILES['skillf']['tmp_name'];
        move_uploaded_file($tm,"empfile_upload/pdf/".$fn);
        $query="UPDATE `skillsets` SET `skills`='$skills',`skillf`='$fn' WHERE emp_id='$emp_id'";
        $query_run=mysqli_query($conn,$query);
        if($query_run) {
            echo '<script> alert("Skillsets updated successfully.");</script>';
            header("location:index.php");
        }
        else{
            echo '<script> alert("Skillsets not updated. Error occured.");</script>';
            header("location:index.php"); 
        }

    } 
?>