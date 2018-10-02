<?php
session_start();

$akun = array(
    array("edi","edi"),
    array("burhan","burhan")
);
?>
<center><h2>Silahkan Login</h2></center>
<form method="post" align="center">
<pre>
    Username : <input type="text" name="username" required><br>
    Password : <input type="password" name="password" required><br>
    <input type="submit" value="Masuk">
</pre>
</form>
<?php
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek = 0;
        $_SESSION['username'] = $username;
        for ($i=0; $i < count($akun); $i++) { 
            if ($akun[$i][0]==$username && $akun[$i][1]==$password){
                header("location: pengisian.php");
                $_SESSION['username'] = $username;
                $cek = 1;
            }
        }
        if ($cek == 0) {
            ?>
            <script type = "text/javascript">alert("Ups! Ada yang salah");</script>
            <?php
        }
    }
?>
