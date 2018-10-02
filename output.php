<?php
    session_start();
    @$save = $_SESSION['save'];

    if (isset($_GET['hapusdata'])) {
        unset($_SESSION['save']);
        header("location: output.php");
    }
?>

<table border = 1px; align="center" style="border-spacing: 0; text-align: center;">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Gender</th>
        <th>Fakultas</th>
        <th>Program Studi</th>
        <th>Email</th>
        <th>Hobi</th>
        <th>Foto</th>
        <th>Opsi</th>
    </tr>
    <?php
        for ($i = 0; $i < count($save) ; $i++) { 
    ?>
            <tr>
                <td>
                    <?php echo $save[$i]['Nama'];?>
                </td>
                <td>
                    <?php echo $save[$i]['NIM'];?>
                </td>
                <td>
                    <?php echo $save[$i]['Gender'];
                    ?>
                </td>
                <td>
                    <?php echo $save[$i]['Fakultas'];?>
                </td>
                <td>
                    <?php echo $save[$i]['Program Studi'];?>
                </td>
                <td>
                    <?php echo $save[$i]['Email'];?>
                </td>
                <td>
                    <?php
                        foreach($save[$i]['Hobi'] as $pilihan) {
                            echo $pilihan."<br>";
                        }
                    ?>
                </td>
                <td>
                    <img src="<?php echo $save[$i]['Foto'];?>" width=100px>
                </td>
                <td>
                    <a href="?hapusdata=all">Hapus Data</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>
