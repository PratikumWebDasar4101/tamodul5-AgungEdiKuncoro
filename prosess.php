<?php
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: login.php");
    }

 if (isset($_POST['nama'])) {

    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $dir = "photo_bank/";
    $target = $dir.$foto;

    $nama       = $_POST['nama'];
    $nim        = $_POST['nim'];
    $gender     = $_POST['gender'];
    $fakultas   = $_POST['fakultas'];
    $email      = $_POST['email'];
    $studi      = $_POST['studi'];
    $hobi       = $_POST['hobi'];

    $hitung = count($_SESSION['save']);
    $_SESSION['save'][$hitung] = array(
        "Nama" => $nama,
        "NIM" => $nim,
        "Gender" => $gender,
        "Fakultas" => $fakultas,
        "Email" => $email,
        "Program Studi" => $studi,
        "Hobi" => $hobi,
        "Foto" => $target
    );

    if(!move_uploaded_file($tmp_foto, $target)){
        die("Gagal Upload!");
    }
    header("location: output.php");
}
?>
