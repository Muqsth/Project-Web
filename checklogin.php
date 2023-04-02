<?php
session_start();
include 'config.php';
   $username = $_POST['username'];
   $password = $_POST['password'];

   echo $username;
   $query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
       if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        echo '<script language ="javascript">alert ("Anda Berhasil Login!.");
        document.location="tb2 web.php";</script>'; //jika berhasil maka akan menuju page index.php
       }else {
        echo '<script language ="javascript">
        alert ("Username dan Password Salah! Silahkan Login Kembali."); 
        document.location="login.php";</script>'; //jika tidak berhasil maka akan tampil pesan gagal
       }

?>