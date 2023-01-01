<?php 
    // including the database connection file
    include_once("../dbConnection/db_connect.php");
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE subject_id='$id'");
    header("Location:../index.php");
?>