<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tkro.css">
    <title>TKRO</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="">Teknik kendaraan ringan otomotif</a></li>
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="tkr.jpg" alt="">
              <div class="hero-content">
                  <h1>Ketersediaan</h1>
<p>-Mobil</p>
<p>-Spare part</p>
<p>-Obeng</p>
<p>-Bangku</p>
<p>-Meja</p>
<p>-Inpocus</p>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
	<!-- Awal Card Form -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-white">
	    <p class="text-center">Jumlah barang yang ada di Tkro</p>
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Jumlah Mobil</label>
	    		<input type="number" name="mobil" class="form-control" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Sparepart</label>
	    		<input type="number" name="sparepart" required>
	    	</div>
			<div class="form-group">
				<label>Jumlah Obeng</label>
				<input type="number" name="obeng" required>
                <div class="form-group">
	    		<label>Jumlah Bangku</label>
	    		<input type="number" name="bangku" required>
	    	</div>
            <div class="form-group">
	    		<label>Jumlah Meja</label>
	    		<input type="number" name="meja" required>
	    	</div>
            <div class="form-group">
	    		<label>Jumlah Inpocus</label>
	    		<input type="number" name="inpocus" required>
	    	</div>
			</div>
			<br></br>
	    	<button type="submit" class="btn btn-success" name="Simpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Kosongkan</button>



	    </form>
	  </div>
	</div>
</body>
</html>
<?php
if (isset($_POST['Simpan'])) {

    $mobil = $_POST['mobil'];
    $sparepart = $_POST['sparepart'];
    $inpocus = $_POST['inpocus'];
    $obeng = $_POST['obeng'];
    $bangku = $_POST['bangku'];
    $meja = $_POST['meja'];

    echo "<b>Jumlah Mobil</b> $mobil";
    echo "<b>Jumlah Sparepart </b> $sparepart";
    echo "<b>Jumlah Inpocus </b> $inpocus";
    echo "<b>Jumlah Obeng </b> $obeng";
    echo "<b>Jumlah Bangku </b> $bangku";
    echo "<b>Jumlah Meja </b> $meja";

}
