<?php
  // take URL from GET method
  $url = $_GET['url'];
 
  // define file transfer
  header('Content-Description: File Transfer');

  // define content type as PNG image
  header("Content-type: image/png");

  // define unique file name and tell that it is an attachment
  header("Content-disposition: attachment; filename= qrcode_".time().".png");

  // read and file
  readfile($url);
?>