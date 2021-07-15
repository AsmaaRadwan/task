<?php 
    include_once("config.php");
    $id = $_GET['id'];
    // echo $id;
    $sql = "delete from users where id = $id ";
    $results = mysqli_query($mysqli, $sql);
    // echo "deleted";
    header("Location: index.php");

