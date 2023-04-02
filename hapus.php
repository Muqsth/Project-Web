<?php
include "config.php";

    $id = $_GET['id'];
    
    $sql = "DELETE FROM komentar WHERE nama='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:data_komen.php");
    }else{
        die("gagal menghapus");
    }
?>