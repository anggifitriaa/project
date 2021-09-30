<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tbsm.css">
    <title>TBSM</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="">Teknik berbasis sepeda motor</a></li>
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="tsm1.jpg" alt="">
              <div class="hero-content">
                  <h1>Ketersediaan</h1>
<p>-Motor</p>
<p>-Compresor</p>
<p>-Obeng</p>
<p>-Bangku</p>
<p>-Meja</p>
<p>-Inpocus</p>
<p>-Kipas</p>
<p>-Ac</p>
        </div>
    </div>
    <div class="container">
	<!-- Awal Card Form -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-white">
	    <p class="text-center">Jumlah barang yang ada di Tbsm</p>
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Jumlah Motor</label>
	    		<input type="number" name="motor" class="form-control" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Compresor</label>
	    		<input type="number" name="compresor" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah obeng</label>
	    		<input type="number" name="obeng" required>
	    	</div>
			<div class="form-group">
				<label>Jumlah Bangku</label>
				<input type="number" name="bangku" required>
                <div class="form-group">
                    <div class="form-group">
	    		<label>Jumlah Meja</label>
	    		<input type="number" name="meja" required>
	    	</div>
	    		<label>Jumlah Inpocus</label>
	    		<input type="number" name="inpocus" required>
	    	</div>
            <div class="form-group">
	    		<label>Jumlah Kipas</label>
	    		<input type="number" name="kipas" required>
	    	</div>
            <div class="form-group">
	    		<label>Jumlah Ac</label>
	    		<input type="number" name="ac" required>
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

    $motor = $_POST['motor'];
    $compresor = $_POST['compresor'];
    $obeng = $_POST['obeng'];
    $bangku = $_POST['bangku'];
    $meja = $_POST['meja'];
    $kipas = $_POST['kipas'];
    $ac = $_POST['ac'];

    echo "<b>Jumlah Motor</b> $motor";
    echo "<b>Jumlah Compresor </b> $compresor";
    echo "<b>Jumlah Obeng </b> $obeng";
    echo "<b>Jumlah Bangku </b> $bangku";
    echo "<b>Jumlah Meja </b> $meja";
    echo "<b>Jumlah Kipas </b> $kipas";
    echo "<b>Jumlah Ac </b> $ac";

}
