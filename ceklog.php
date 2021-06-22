<?php
        session_start();

        include 'koneksi.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql= mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

        $cek= mysqli_num_rows($sql);

        if ($cek > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:product.php");
        }
        else {
            header("location:login.php");
        }
?>