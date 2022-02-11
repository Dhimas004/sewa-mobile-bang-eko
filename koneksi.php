<?php
// $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
// mysql_select_db("tugas_php",$conn);
$conn = mysqli_connect('localhost', 'root', '', 'tugas_php');
$strSQL = "select * from testi";
$qry = mysqli_query($conn, $strSQL) or die("query salah");
