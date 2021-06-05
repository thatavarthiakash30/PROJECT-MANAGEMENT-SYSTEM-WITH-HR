<?php
    include 'connection.php';
    if(isset($_POST['Search'])){
        $projname=$_POST['projname'];
        $selectsql="SELECT * FROM `project_details` WHERE proj_name LIKE '%$projname%'";
    }
?>