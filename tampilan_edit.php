<?php
date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan_edit</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css" />
</head>
<body class='m-5'>
    <?php
    include "config.php";
    
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM komentar WHERE nama='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    echo "<form method=\"POST\" action=\"edit.php\">
    <input type=\"hidden\" name=\"id\" value=\"$id\">
    <table>
    <div class='mb-3'>
        <label class='form-label'>Nama</label>
        <input class='form-control' type='text' name='nama' size='50' value='$row[nama]'></td>
    </div>

    <div class='mb-3'>
        <label class='form-label'>Email</label>
        <input class='form-control' type='text' name='email' size='50' value='$row[email]'></td>
    </div>

    <div class='mb-3'>
        <label class='form-label'>No HP</label>
        <input class='form-control' type='text' name='no_hp' size='50' value='$row[no_hp]'></td>
    </div>

    <div class='mb-3'>
        <label class='form-label'>Komentar</label>
        <input class='form-control' type='text' name='tanggapan' size='50' value='$row[tanggapan]'></td>
    </div>

    <tr>
        <td colspan='3'>
            <center>
                <input type='submit' class='btn btn-success' value='Simpan'>
                <input type='reset' class='btn btn-warning' value='Undo'>
                <a href='data_komen.php'> <input type='button' class='btn btn-primary' value='Kembali'></a> 
            </center>
        </td>
    </tr>
    </table>
    </form>"
    ?>
</body>
</html>