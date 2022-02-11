<?php

$vnama = $_POST['txtnama'];
$vemail = $_POST['txtemail'];
$vweb = $_POST['txtweb'];
$vkomentar = $_POST['txtkomentar'];

$conn = mysqli_connect('localhost', 'root', '', 'tugas_php');
$strSQL = "insert into testi (nama,email,website,komentar) values ('$vnama','$vemail','$vweb','$vkomentar')";
$qry = mysqli_query($conn, $strSQL) or die("Query salah");
?>
Data Sudah Diinput
<a href="index.php"> Kembali </a>