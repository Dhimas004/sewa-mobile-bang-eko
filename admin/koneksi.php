<?php
$conn = mysqli_connect('localhost', 'root', '', 'tugas_php');
$strSQL = "select * from mobil";
$qry = mysql_query($strSQL, $conn) or die("query salah");
