<?php
//Koneksi Database
$server = "localhost";
$user = "root";
$pass = "";
$database = "projek_anggi";

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    //Pengujian Apakah data akan diedit atau disimpan baru
    if ($_GET['hal'] == "edit") {
        //Data akan di edit
        $edit = mysqli_query($koneksi, "UPDATE beranda set

											 	nama_supplier = '$_POST[tnama_supplier]',
                        no_telp = '$_POST[tno_telp]',
												alamat = '$_POST[talamat]',
                        WHERE id_supplier='$_POST[id]'
										   ");
        if ($edit) //jika edit sukses
        {
            echo "<script>
						alert('Edit data suksess!');
						document.location='beranda.php';
				     </script>";
        } else {
            echo "<script>
						alert('Edit data GAGAL!!');
						document.location='beranda.php';
				     </script>";
        }
    } else {
        //Data akan disimpan Baru
        $simpan = mysqli_query($koneksi, "INSERT INTO supplier (id_supplier, nama_supplier, no_telp, alamat)
										  VALUES ('$_POST[tid_supplier]',
										  		 '$_POST[tnama_supplier]',
										  		 '$_POST[tno_telp]',
										  		 '$_POST[talamat]')
										 ");
        if ($simpan) //jika simpan sukses
        {
            echo "<script>
						alert('Simpan data suksess!');
						document.location='supplier.php';
				     </script>";
        } else {
            echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='supplier.php';
				     </script>";
        }
    }

}

//Pengujian jika tombol Edit / Hapus di klik
if (isset($_GET['hal'])) {
    //Pengujian jika edit Data
    if ($_GET['hal'] == "edit") {
        //Tampilkan Data yang akan diedit
        $tampil = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            //Jika data ditemukan, maka data ditampung ke dalam variabel
            $vid_supplier = $data['id_supplier'];
            $vnama_supplier = $data['nama_supplier'];
            $vno_telp = $data['no_telp'];
            $valamat = $data['alamat'];
        }
    } else if ($_GET['hal'] == "hapus") {
        //Persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier = '$_GET[id]' ");
        if ($hapus) {
            echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='supplier.php';
				     </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD 2020 PHP & MySQL + Bootstrap 4</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#"><i><b>Pengadaan barang</b></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><b></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rpl.php"><b>Lab Rpl</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tkro.php"><b>Bengkel Tkro</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tbsm.php"><b>Bengkel Tbsm</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    		Data Master
  			</button>
 			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    		<li><a class="dropdown-item" href="penyimpanan.php">Data Barang</a></li>
    		<li><a class="dropdown-item" href="satuan_barang.php">Satuan Barang</a></li>
    		<li><a class="dropdown-item" href="jenis_barang.php">Jenis Barang</a></li>
  		</ul>
		</div>
<div class="container">
	<!-- Awal Card Form -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-white">
	    <p class="text-center">Penambahan Data Supplier</p>
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>ID Supplier</label>
	    		<input type="text" name="tid_supplier" value="<?=@$vid_supplier?>" class="form-control" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama Supplier</label>
	    		<input type="text" name="tnama_supplier" value="<?=@$vnama_supplier?>" class="form-control" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nomor Telepon</label>
	    		<input type="text" name="tno_telp" value="<?=@$vno_telp?>" class="form-control" required>
	    	</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="talamat"></textarea>
			</div>
			<br></br>
	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

	    </form>
	  </div>
	</div>
	<div class="card mt-3">
	  <div class="card-header bg-dark text-white">
	    <p class="text-center">Data Supplier</p>
	  </div>
	  <div class="card-body">

	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>ID Supplier</th>
	    		<th>Nama Supplier</th>
	    		<th>Nomor Telepon</th>
	    		<th>Alamat</th>
	    		<th>Aksi</th>
	    	</tr>
	    	<?php
$no = 1;
$tampil = mysqli_query($koneksi, "SELECT * from supplier order by id_supplier desc");
while ($data = mysqli_fetch_array($tampil)):

?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['id_supplier']?></td>
	    		<td><?=$data['nama_supplier']?></td>
	    		<td><?=$data['no_telp']?></td>
	    		<td><?=$data['alamat']?></td>
	    		<td>
	    			<a href="supplier.php?hal=edit&id=<?=$data['id_supplier']?>" class="btn btn-warning"> Edit </a>
	    			<a href="supplier.php?hal=hapus&id=<?=$data['id_supplier']?>"
	    			   onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
	    		</td>
	    	</tr>
	    <?php endwhile;?>
	    </table>

	  </div>
	</div>

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>