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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HOTEL-EXERCISE</title>
    <link rel="stylesheet" href="style.css">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body>



    <h1 id="title">Esercizio Hotels</h1>

    <table class="table">
        <thead>
            <tr>
                <?php

                foreach ($hotels[0] as $key => $value) {

                ?>

                    <th scope="col"><?php echo $key ?></th>

                <?php

                }

                ?>

            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($hotels as $singleHotel) {
                echo "<tr>";
                foreach ($singleHotel as $hotelClassKey => $hotelClassValue) {
                    if ($hotelClassKey == "parking") {
                        if ($hotelClassValue == true) {
                            echo "<td>Yes</td>";
                        } else {
                            echo "<td>No</td>";
                        }
                    } else {

                        echo "<td>{$hotelClassValue}</td>";
                    }
                }

                echo "</tr>";
            }

            ?>



        </tbody>
    </table>



























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>