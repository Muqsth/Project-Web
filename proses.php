<?php
$conn = mysqli_connect ("localhost", "root", "", "koment");

$nama = $_POST ['nama'];
$email = $_POST ['email'];
$no_hp = $_POST ['no_hp'];
$komentar = $_POST ['komentar'];
$submit = $_POST ['submit'];

$sql = "INSERT INTO komentar VALUES ('$nama', '$email', '$no_hp', '$komentar', '$submit')";
$query = mysqli_query($conn, $sql);

if($query) {
    header("location:tb2 web.php");
}else {
    echo "Gagal edit";
}
?>