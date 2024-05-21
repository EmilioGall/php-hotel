<?php

$hotels = [

   [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
   ],
   [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
   ],
   [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
   ],
   [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
   ],
   [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
   ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- /Link Bootstrap -->

   <title>PHP - Hotels</title>

</head>

<body>

   <div class="container-md">

      <h1 class="text-primary text-center my-3">Hotels List</h1>

      <table class="table table-hover">

         <thead>

            <tr class="border">
               <th scope="col">Hotel Name</th>
               <th scope="col">Vote</th>
               <th scope="col">Distance to City Center</th>
               <th scope="col">Parking</th>
               <th scope="col">Description</th>
            </tr>

         </thead>

         <tbody>

            <tr>

               <td scope="row">Name</td>
               <td>stars</td>
               <td>Km</td>
               <td>true/false</td>
               <td>text</td>

            </tr>

         </tbody>

      </table>

   </div>

</body>

</html>