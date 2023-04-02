<?php
include "config.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $tanggapan = $_POST['tanggapan'];
    $submit = $_POST['submit'];
    
    $sql = "UPDATE komentar SET nama='$nama', email='$email', no_hp='$no_hp', tanggapan='$tanggapan', submit='$submit' WHERE nama='$nama'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:data_komen.php");
    }else{
        echo "Maaf gagal edit";
    }
?>