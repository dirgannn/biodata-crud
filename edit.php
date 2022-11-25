<?php

include_once 'config.php';

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['Emaill']);
    $tgl_lahir = mysqli_real_escape_string($conn, $_POST['ultahh']);
    $jk = mysqli_real_escape_string($conn, $_POST['jk']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $kelas = mysqli_real_escape_string($conn, $_POST['kelass']);
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "uploads/" . $nama_file;

    move_uploaded_file($tmp_file, $path);
    if (empty($nama) || empty($email) || empty($tgl_lahir) || empty($jk) || empty($no_hp) || empty($kelas)) {
        echo "<font>silahkan lengkapi data anda!!</font>";
    } else {
        $result = mysqli_query($conn, "UPDATE siswa SET nama='$nama', email='$email', tgl_lahir='$tgl_lahir', jk='$jk', no_hp='$no_hp', kelas='$kelas' WHERE id = $id");
        header('location: berhasil.html');
    }

    if (isset($_POST['lol'])) {
        header('location: index.php');
    }
}
?>


<?php

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $nama = $res['nama'];
    $email = $res['email'];
    $tgl_lahir = $res['tgl_lahir'];
    $jk = $res['jk'];
    $no_hp = $res['no_hp'];
    $kelas = $res['kelas'];
    $nama_file = $res['foto'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- <link rel="stylesheet" href="assets/css/add.css"> -->
    <link rel="stylesheet" href="assets/add.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;1,200;1,300&family=Sono:wght@200;300;400&family=Source+Sans+Pro:ital,wght@0,200;1,200&display=swap"
        rel="stylesheet">

</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class='left-container'>
            <h1>
                <i class='fas fa-paw'></i>
                BIODATA BARU
            </h1>
            <div class='puppy'>
                <img src='assets/img/murid.png'>
            </div>
        </div>
        <div class='right-container'>
            <header>
                <h1>Yay, broww! silahkan isi biodata anda dibawah ini</h1>
                <div class='set'>
                    <div class='name'>
                        <label for='name'>Name</label>
                        <input id='name' name="nama" placeholder="Nama lengkap" type='text' required
                            value="<?= $nama ?>">
                    </div>
                    <form action="upload.php" enctype="multipart/form-data" method="post">
                        <div class='foto'>
                            <button id='upload'>
                                <i class='fas fa-camera-retro'></i>
                            </button>
                            <label for='upload'>Upload foto</label>
                            <input type="file" name="gambar">
                        </div>
                    </form>
                </div>
                <div class='set'>
                    <div class='email'>
                        <label for='email'>Email</label>
                        <input id='email' placeholder="Email" type='text' name="Emaill" required value="<?= $email ?>">
                    </div>
                    <div class='ultah'>
                        <label for='ultah'>Tanggal lahir</label>
                        <input id='ultah' placeholder='MM/DD/YYYY' type='text' name="ultahh" required
                            value="<?= $tgl_lahir ?>">
                    </div>
                </div>
                <div class='set'>
                    <div class='jenis-kelamin'>
                        <label for=''>jenis-kelamin</label>
                        <div class='radio-container'>
                            <input checked='' id='kelamin-laki' name='jk' type='radio' value='Laki-laki' required>
                            <label for='kelamin-laki' style="font-size: 13px;">Laki-laki</label>
                            <input id='kelamin-wanita' name='jk' type='radio' value='Perempuan' required>
                            <label for='kelamin-wanita' style="font-size: 13px;">Perempuan</label>
                        </div>
                    </div>
                    <div class='tanggal-lahir'>
                        <label for='pet-spayed'>No handphone</label>
                        <input type="text" name="no_hp" placeholder="Nomor telepon" required value="">
                    </div>
                </div>
                <div class='kelas'>
                    <label for='kelas-XRA'>Kelas</label>
                    <div class='kelasss'>
                        <input checked='' id='kelas-XRA' name='kelass' type='radio' value='XRA' required>
                        <label for='kelas-XRA'>X RA</label>
                        <input id='kelas-XRB' name='kelass' type='radio' value='XRB' required>
                        <label for='kelas-XRB'>X RB</label>
                        <input id='kelas-XRC' name='kelass' type='radio' value='XRC' required>
                        <label for='kelas-XRC'>X RC</label>
                        <input id='not-siswa' name='kelass' type='radio' value='NOTSISWA' required>
                        <label for='not-siswa'>Not siswa</label>
                    </div>
                </div>
            </header>
            <footer>
                <div class='set'>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <button id='back' onclick="window.location.href='index.php'" name="lol">Back</button>
                    <button type="submit" name="submit" value="submit" id="next" onclick="answer()">Tambah</button>
                </div>
            </footer>
        </div>
        </div>
    </form>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
<html>