<?php ?>

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

$selected_parking = empty($_GET['user_check_parking']);

$selected_vote = intval($_GET['user_selected_vote']);

var_dump($selected_parking);

var_dump($selected_vote);

$filtered_hotels = $hotels;

if (isset($_GET['user_check_parking']) && !empty($_GET['user_check_parking'])) {

   $tmp_hotels = [];

   foreach ($filtered_hotels as $hotel) {

      if (!empty($_GET['user_check_parking']) === $hotel['parking']) {

         $tmp_hotels[] = $hotel;
      }
   }

   $filtered_hotels = $tmp_hotels;
}

var_dump($filtered_hotels);

if (isset($_GET['user_selected_vote'])) {

   $selected_vote = intval($_GET['user_selected_vote']);

   $tmp_hotels = [];

   foreach ($filtered_hotels as $hotel) {

      if ($selected_vote <= $hotel['vote']) {

         $tmp_hotels[] = $hotel;
      }
   }

   $filtered_hotels = $tmp_hotels;
}

var_dump($filtered_hotels);


function vote_filter($array, $vote_number)
{
   return ($array['vote'] >= $vote_number);
};

function parking_filter($array, $parking_boolean)
{
   return ($array['parking'] === $parking_boolean);
};

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

      <!-- Form Section -->
      <section>

         <form class="row justify-content-between" action="index.php" method="GET">

            <!-- Forms Inputs -->
            <div class="col-8 row align-items-center">

               <!-- Select Vote -->
               <div class="col-4">

                  <select class="form-select" aria-label="Select a vote" name="user_selected_vote">

                     <option value="0" selected>Select a minimum vote</option>

                     <?php for ($i = 0; $i < 5; $i++) { ?>

                        <option value="<?php echo $i + 1 ?>">
                           <?php for ($n = 0; $n <= $i; $n++) {

                              echo '&starf;';
                           } ?>
                        </option>

                     <?php } ?>

                  </select>

               </div>
               <!-- /Select Vote -->

               <!-- Check for Parking -->
               <div class="col-4 form-check">

                  <input type="checkbox" class="form-check-input" id="parking_check" name="user_check_parking">

                  <label class="form-check-label" for="parking_check"> Only with Parking </label>

               </div>
               <!-- /Check for Parking -->

            </div>
            <!-- /Forms Inputs -->

            <!-- Forms Buttons -->
            <div class="col-2 row justify-content-between">

               <button type="submit" class="btn btn-primary col-6">Filter</button>

               <button type="reset" class="btn btn-secondary col-5">Reset</button>

            </div>
            <!-- /Forms Buttons -->

         </form>

      </section>
      <!-- /Form Section -->

      <!-- Table Section -->
      <section>

         <table class="table table-hover">

            <!-- Table Header -->
            <thead>

               <tr>

                  <th scope="col">Hotel Name</th>

                  <th scope="col" class="text-center">Vote</th>

                  <th scope="col" class="text-center">Distance to City Center</th>

                  <th scope="col" class="text-center">Parking</th>

                  <th scope="col">Description</th>

               </tr>

            </thead>
            <!-- Table Header -->

            <!-- Table Body -->
            <tbody>

               <?php foreach ($filtered_hotels as $feature => $hotel) { ?>
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
            <!-- /Table Body -->

         </table>

      </section>
      <!-- /Table Section -->

   </div>

</body>

</html>