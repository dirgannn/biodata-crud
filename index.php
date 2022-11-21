<?php

include_once 'config.php';

$result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id ASC");
$sql =  mysqli_query($conn, "ALTER TABLE siswa AUTO_INCREMENT = 1");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;1,200;1,300&family=Sono:wght@200;300;400&family=Source+Sans+Pro:ital,wght@0,200;1,200&display=swap"
        rel="stylesheet">
</head>

<body>

    <button class="button-56" role="button" onclick="window.location.href='add.php'">Tambah data baru</button>
    <h1>
        Biodata
    </h1>
    <p>
        (Siswa RPL kelas 10 SKANDAKRA)
    </p>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>
                        Nama
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Tanggal lahir
                    </th>
                    <th>
                        Jenis kelamin
                    </th>
                    <th>
                        Nomor hp
                    </th>
                    <th>
                        Kelas
                    </th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>"  . $res['id'] . "</td>";
                        echo "<td>"  . $res['nama'] . "</td>";
                        echo "<td>"  . $res['email'] . "</td>";
                        echo "<td>"  . $res['tgl_lahir'] . "</td>";
                        echo "<td>"  . $res['jk'] . "</td>";
                        echo "<td>"  . $res['no_hp'] . "</td>";
                        echo "<td>"  . $res['kelas'] . "</td>";
                        echo "<td class=\"aksi\"><a href=\"edit.php?id=$res[id]\" class=\"\loli\">Edit</a><a href=\"delete.php?id=$res[id]\" onClick= \"return confirm('Yakin untuk menghapus?')\">Hapus</a></td>";
                    }
                    ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan='8'>
                        Tahun: 2022
                    </th>
                </tr>
            </tfoot>
        </table>
    </main>
    <script src="assets/js/main.js"></script>
</body>

</html>