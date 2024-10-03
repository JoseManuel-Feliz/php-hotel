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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- BOOTSTRAP CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
<title>php-hotel</title>

</html>

<body>
    <main>
        <ul>

            <?php foreach ($hotels as $hotel) { ?>
                <li>
                    <h3>
                        <?php echo $hotel['name'] ?>
                    </h3>
                </li>
                <li>
                    <p>
                        <?php echo $hotel['description'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        <?php echo $hotel['parking'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        <?php echo $hotel['vote'] ?>
                    </p>
                </li>
                <li>
                    <p>
                        <?php echo $hotel['distance_to_center'] ?>
                    </p>
                </li>


            <?php }  ?>
        </ul>
    </main>
</body>

</html>