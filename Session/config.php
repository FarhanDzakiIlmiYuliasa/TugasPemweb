<?php

$conn = mysqli_connect("localhost","root","","tugaspemweb");
if (!$conn) {
    die("koneksi kedatabase gagal". mysqli_connect_error());
}
?>