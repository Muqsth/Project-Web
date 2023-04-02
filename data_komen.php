<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Data Komentar</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css" />

</head>
<body class='m-5'>
    <h1>List Komentar</h1>
        <?php 
        include "config.php";
        $sql = "SELECT * FROM komentar ORDER BY nama";
        $query = mysqli_query($conn, $sql);
        echo 
        "<table class='table'>
        <thead>
            <tr>
                <th class='col'>No</th>
                <th class='col'>Nama</th>
                <th class='col'>Email</th>
                <th class='col'>Nomer HP</th>
                <th class='col'>Tanggapan</th>
                <th class='col'>Submit</th>
                <th class='col'>Action</th>
            </tr>
            </thead>";
            $no=1;
        while ($row=mysqli_fetch_array($query)){
            echo "<tr>
            <td>$no</td>
            <td>$row[nama]</td>
            <td>$row[email]</td>
            <td>$row[no_hp]</td>
            <td>$row[tanggapan]</td>
            <td>$row[submit]</td>
            <td>
                <a href='tampilan_edit.php?id=$row[nama]'class=\"btn btn-primary\">Edit</a> | 
                <a href='hapus.php?id=$row[nama]'class=\"btn btn-danger\">Hapus</a>
            </td>
            </tr>";
            $no++;
        };
        echo"
        </table>";
        ?>
         <a href='tb2 web.php'> <input type='button' class='btn btn-primary' value='Kembali'></a> 
</body>
</html>