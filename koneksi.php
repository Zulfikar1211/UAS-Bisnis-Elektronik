<?php
$koneksi = mysqli_connect("localhost", "root", "", "zulfikar_311910623");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
