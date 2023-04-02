<?php
//mysqli_connect("mysql_host", "mysql_username", "mysql_password", "database");

$conn = mysqli_connect ("localhost", "root", "", "koment");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal". mysqli_connect_error();
}
?>