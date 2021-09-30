<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rpl.css">
    <title>RPL</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="">Rekayasa perangkat lunak</a></li>
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="rpl.jpg" alt="">
              <div class="hero-content">
                  <h1>Ketersediaan</h1>
<p>-Komputer</p>
<p>-Laptop</p>
<p>-Inpocus</p>
<p>-Bangku</p>
<p>-Meja</p>
<p>-Kipas</p>
<p>-Ac</p>
        </div>
    </div>
    <div class="container">
	<div class="card mt-5">
	  <div class="card-header bg-dark text-white">
	    <p class="text-center">Jumlah barang yang ada di Rpl</p>
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Jumlah Komputer</label>
	    		<input type="number" name="komputer" class="form-control" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Laptop</label>
	    		<input type="number" name="laptop" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Inpocus</label>
	    		<input type="number" name="inpocus" required>
	    	</div>
			<div class="form-group">
				<label>Jumlah Bangku</label>
				<input type="number" name="bangku" required>
                <div class="form-group">
	    		<label>Jumlah Meja</label>
	    		<input type="number" name="meja" required>
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

    $komputer = $_POST['komputer'];
    $laptop = $_POST['laptop'];
    $inpocus = $_POST['inpocus'];
    $bangku = $_POST['bangku'];
    $meja = $_POST['meja'];
    $kipas = $_POST['kipas'];
    $ac = $_POST['ac'];

    echo "<b>Jumlah komputer</b> $komputer";
    echo "<b>Jumlah Laptop </b> $laptop";
    echo "<b>Jumlah Inpocus </b> $inpocus";
    echo "<b>Jumlah Bangku </b> $bangku";
    echo "<b>Jumlah Meja </b> $meja";
    echo "<b>Jumlah Kipas </b> $kipas";
    echo "<b>Jumlah Ac </b> $ac";

}

?>
