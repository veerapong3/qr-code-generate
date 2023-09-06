<?php
  // create a function to encode the URL
  function encodeURIComponent($str){
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
  }
?>