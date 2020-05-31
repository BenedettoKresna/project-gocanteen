<?php

    define( "BASE_URL", "http://localhost/gocanteen/");

    function direct($url)
    {
		  echo "<script> window.location = '$url'; </script>";
	  }
    
?>
