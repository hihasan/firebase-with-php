<?php
	if($_GET["name"]==patient && $_GET["pass"]==123456)
   {
      header("Location: index.php");
      die();
   }

   else
   {
      header("Location: http://www.google.com");
      die();
   }
?>