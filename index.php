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
      <div class="logo">
        <img src="img/logo.png" alt="">
      </div>
    </header>

    <main>
      <ul>

       <?php foreach ($database as $cd) { ?>

        <li>
          <img src="<?php echo $cd["poster"];?>" alt="">
          <p><?php echo $cd["title"];?></p>
          <p><?php echo $cd["author"];?></p>
          <p><?php echo $cd["year"];?></p>
        </li>




       <?php } ?>

      </ul>

    </main>


  </body>
</html>
