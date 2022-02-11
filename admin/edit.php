<?php
include('header.php');
session_start();

if (!isset($_SESSION['saya_admin'])) {
    header('location:./../' . $_SESSION['akses']);
    exit();
}

$nama = (isset($_SESSION['nama_user'])) ? $_SESSION['nama_user'] : '';
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'tugas_php');
$strSQL = "select * from mobil where nopol='$_GET[vnopol]' ";
$qry = mysqli_query($conn, $strSQL) or die("query salah");
$row = mysqli_fetch_array($qry);
?>
<!-- <h1>Halaman Admin <span style="color:red"><?php echo $nama; ?></span></h1> -->
<!-- <a href="./../logout.php">Logout</a> -->

<div class="container">
    <div class="col-sm-9">
        <h2>Halaman Admin</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Dibuat pada, 01 Januari 2019.</h5>
        <h5><span class="label label-success">#Stmik insan pembangunan</span></h5><br>
    </div>
</div>
<div class="container">
    <h3><u>Edit Disini</u></h3><br>
    <form action="hedit.php" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                <div class="form-group">
                    <div class="form-group">
                        <label><b>Foto Mobil</b></label>
                        <input type="text" name="txtfoto" class="form-control" value="<?php echo $row['foto']; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label><b>Nomor Polisi</b></label>
                        <input type="text" name="txtnopol" class="form-control" value="<?php echo $row['nopol']; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label><b>Nama Mobil</b></label>
                        <input type="text" name="txtmobil" class="form-control" value="<?php echo $row['namamobil']; ?>">
                    </div>
                    <div class="form-group">
                        <label><b>Harga Sewa</b></label>
                        <input type="text" name="txtharga" class="form-control" value="<?php echo $row['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label><b>Status</b></label>
                        <input type="text" name="txtstatus" class="form-control" value="<?php echo $row['status']; ?>">
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <button type="submit" class="btn btn-info">Simpan</a></button>
                        <a href="index.php" class="btn btn-danger">Batal</a>
                    </div><br>
                </div>
    </form>
</div>





<?php
include('../footer.php');
?>