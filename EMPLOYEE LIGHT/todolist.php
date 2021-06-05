<?php 
    include 'connection.php';
    if(isset($_POST['Addtask'])){
        $nameofwork=$_POST['nameofwork'];
        $datetime=$_POST['datetime'];
        $optional=$_POST['optional'];
        $query="insert into todolistemp values ('$nameofwork','$datetime','$optional')";
        $query_run=mysqli_query($conn,$query);
        if($query_run) {
            echo '<script> alert("Task added successfully.");</script>';
            header("location:index.php");
        }
        else{
            echo '<script> alert("Task not added. Error occured.");</script>';
            header("location:index.php");
        }
    }
?>