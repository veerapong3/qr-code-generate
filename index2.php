<?php
  // include the functions file
  include "functions.php";

  // define QR code
  $qr_code = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=w3programmings.com&choe=UTF-8";

  // create download button
  echo '<a href="download-qr-code.php?url='.encodeURIComponent($qr_code).'" class="btn btn-md btn-success" download>Download</a>';
?>


