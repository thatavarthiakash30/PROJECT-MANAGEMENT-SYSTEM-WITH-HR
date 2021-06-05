<?php 
    include 'connection.php';
    if(isset($_POST['Updateb'])){
        $emp_id=$_POST['emp_id'];
        $name=$_POST['name'];
        $gender2=$_POST['gender2'];
        $birthdate=$_POST['date'];
        $ad1=$_POST['ad1'];
        $ad2=$_POST['ad2'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $query="UPDATE `basic_info` SET `name`='$name',`gender2`='$gender2',`birthdate`='$birthdate',`ad1`='$ad1',`ad2`='$ad2',`city`='$city',`state`='$state',`country`='$country' WHERE emp_id='$emp_id'";
        $query_run=mysqli_query($conn,$query);
        if($query_run) {
            echo '<script> alert("Basic information updated successfully.");</script>';
            header("location:index.php");
        }
        else{
            echo '<script> alert("Basic information not updated. Error occured.");</script>';
            header("location:index.php"); 
        }

    } 
?>