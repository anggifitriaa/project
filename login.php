<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['passwod'];

    $cek = mysqli_query($koneksi, "select * from users WHERE username='$username' AND password='$password");
    $hitung = mysqli_num_rows($cek);

    if ($hitung > 0) {
        $_SESSION['log'] = 'True';
        header("location:penyimpanan.php");
        echo "<script>alert('login berhasil')</script>";
    } else {
        header("location:login.php");
        echo "<script>alert('login gagal')</script>";
    }

}

if (!isset($_SESSION['login'])) {
} else {
    header("location:penyimpanan.php");
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="container">
          <h1>Login</h1>
            <form action="beranda.php" method="post">
                <label>Login</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Login</button>
                  <a href="beranda.php"></a>
                </p>
            </form>
        </div>
    </body>
</html>
