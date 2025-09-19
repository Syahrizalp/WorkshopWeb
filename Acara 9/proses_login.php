<?php
// data user dan password
$username_benar = "admin";
$password_benar = "12345";

// mengambil input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// kondisi
if ($username == $username_benar && $password == $password_benar) {
    echo "<h3>Login berhasil. Selamat datang, $username!</h3>";
} else {
    echo "<h3>Login gagal. Username atau password salah.</h3>";
    echo '<a href="login.html">Coba Lagi</a>';
}
?>
