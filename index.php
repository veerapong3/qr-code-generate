<?php
include "functions.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>How to Create a QRCode using Google QRCode API</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">ระบบสร้าง QR CODE โรงเรียนชื่นชมพิทยาคาร</h1>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-3">
				<form method="POST">
					<div class="form-group">
						<label for="">Past Link or Text for QR Code Generate</label>
						<input type="text" class="form-control" name="text_code" required>
					</div>
					<button type="submit" class="btn btn-primary" name="generate">Generate QRCode</button>
				</form>
			</div>
			<div class="col-sm-3">
				<?php
				if (isset($_POST['generate'])) {
					$code = $_POST['text_code'];
					echo "
						<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8'>
					";
					echo "<a href='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8'>Link</a>";
				}

				$qr_code = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=w3programmings.com&choe=UTF-8";
				$qr = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8";
				// create download button
				echo '<a href="download-qr-code.php?url='.encodeURIComponent($qr).'" class="btn btn-md btn-success" download>Download</a>';
			  
				?>
				
			</div>
		</div>
	</div>
</body>

</html>