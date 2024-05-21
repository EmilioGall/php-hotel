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

   <!-- Link Fontawesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- /Link Fontawesome -->

   <title>PHP - Hotels</title>

</head>

<body>

   <div class="container-md">

      <h1 class="text-primary text-center mt-5 mb-3">Hotels List</h1>

      <table class="table table-hover">

         <!-- Table Header -->
         <thead>

            <tr>

               <th scope="col">Hotel Name</th>

               <th scope="col" class="text-center">Vote</th>

               <th scope="col" class="text-center">Distance to City Center</th>

               <th scope="col" class="text-center">Parking</th>

               <th scope="col">Description</th>

               <th scope="col"></th>

            </tr>

         </thead>
         <!-- Table Header -->

         <tbody>

            <?php foreach ($hotels as $feature => $hotel) { ?>
               <tr>

                  <!-- Name Cell -->
                  <td scope="row"><?php echo $hotel['name'] ?></td>
                  <!-- /Name Cell -->

                  <!-- Vote Cell -->
                  <td class="text-center">

                     <?php for ($i = 0; $i < 5; $i++) {

                        if ($i < $hotel['vote']) {

                           echo '<span><i class="fa-solid fa-star text-warning"></i></span>';
                        } else {

                           echo '<span><i class="fa-regular fa-star text-warning"></i></span>';
                        }
                     } ?>

                  </td>
                  <!-- /Vote Cell -->

                  <!-- Distance City Center Cell -->
                  <td class="text-center"><?php echo $hotel['distance_to_center'] ?> Km</td>
                  <!-- /Distance City Center Cell -->

                  <!-- Parking Cell -->
                  <td class="text-center">

                     <?php if ($hotel['parking']) {

                        echo '<span><i class="fa-solid fa-check text-success"></i></span>';
                     } else {

                        echo '<span><i class="fa-solid fa-xmark text-danger"></i></span>';
                     } ?>

                  </td>
                  <!-- /Parking Cell -->

                  <!-- Description Cell -->
                  <td colspan="2"><?php echo $hotel['description'] ?></td>
                  <!-- /Description Cell -->

               </tr>
            <?php } ?>

         </tbody>

      </table>

   </div>

</body>

</html>