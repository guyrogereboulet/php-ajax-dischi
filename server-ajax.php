<?php
 include 'server.php';
//var_dump($database); die();
 $author = $_GET["author"];
 // var_dump($author); die();
 if (empty($author) || $author === "All") {
   // var_dump($database); die();
   header('Content-Type: application/json');
   echo json_encode($database);
 } else {
   $cdFilter= [];
   foreach ($database as $cd ) {
     if ($cd["author"] === $author) {
       $cdFilter[] = $cd;
     }
   }
   if (empty($cdFilter)) {
     $cdFilter = [
        [
          'title' => 'Non ci sono titoli',
          'author' => 'Non ci sono autori',
          'year' => 'Non ci sono anni',
          'poster' => 'https://image.shutterstock.com/image-vector/404-not-found-problem-disconnect-600w-721322569.jpg'
        ]
      ];
   }
    header('Content-Type: application/json');
    echo json_encode($cdFilter);
 }



?>
