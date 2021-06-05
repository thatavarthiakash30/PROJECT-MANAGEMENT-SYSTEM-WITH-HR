<?php 
    include 'connection.php';
    if(isset($_POST['Updatea'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $currentpassword=$_POST['currentpassword'];
        $newpassword=$_POST['newpassword'];
        $confirmpassword=$_POST['confirmpassword'];
        $query="UPDATE `account_data` SET `email`='$email',`mobile`='$mobile',`currentpassword`='$currentpassword',`newpassword`='$newpassword',`confirmpassword`='$confirmpassword' WHERE username='$username'";
        $query_run=mysqli_query($conn,$query);
        if($query_run) {
            echo '<script> alert("Account Data updated successfully.");</script>';
            header("location:index.php");
        }
        else{
            echo '<script> alert("Account Data not updated. Error occured.");</script>';
            header("location:index.php");
        }

    } 
?>