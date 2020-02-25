<?php
 include 'server.php';

 foreach ($database as $cd ) {
   echo $cd["title"];
   echo $cd["author"];
   echo $cd["year"];
   echo $cd["poster"];
 }
?>
