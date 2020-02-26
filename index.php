<?php
 include 'server.php';

 // foreach ($database as $cd ) {
 //   echo $cd["title"];
 //   echo $cd["author"];
 //   echo $cd["year"];
 //   echo $cd["poster"];
 // }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <ul>

         <?php foreach ($database as $cd) { ?>

          <li>
            <img src="<?php echo $cd["poster"];?>" alt="">
            <h3><?php echo $cd["title"];?></h3>
            <p><?php echo $cd["author"];?></p>
            <small><?php echo $cd["year"];?></small>
          </li>




         <?php } ?>

        </ul>

      </div>


    </main>


  </body>
</html>
