<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Pengisian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2>Silahkan isi data anda</h2>
    <pre>
    <form action="prosess.php" method="post" enctype="multipart/form-data">
        Nama	        : <input type="text" name="nama" maxlength="25" required>

        NIM	        : <input type="text" name="nim" pattern="\d*" maxlength="10" >

        Jenis Kelamin   : <input type="radio" name="gender" value="Laki - laki" required>Laki - Laki <input type="radio" name="gender" value="Perempuan" required>Perempuan

        Fakultas        : <select name="fakultas">
                            <option value="FIT">Ilmu Terapan</option>
                            <option value="FEB">Ekonomi dan Bisnis</option>
                            <option value="FKB">Komunikasi dan Bisnis</option>
                            <option value="FTE">Teknik Elelktro</option>
                          </select>

        Program Studi   : <select name="studi">
                            <option value="MI">D3 Manajemen Informatika</option>
                            <option value="AKUNTANSI">S1 Akuntansi</option>
                            <option value="ILKOM">S1 Ilmu Komunikasi</option>
                            <option value="ELEKTRO">S1 Teknik Elelktro</option>
                          </select>
                          
        Email 	        : <input type="Email" name="email" required>

        Hobi            : <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
                          <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
                          <input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>
                   
        Foto            : <input type="file" name="foto" id="foto"><br>
                                                <input type="submit" value="submit">
    </form>
    </pre>
</body>
</html>
