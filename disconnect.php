<?php
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
mysqli_select_db($conn, 'kampus');
if (!$conn) {
  die("Error di Koneksi");
}
