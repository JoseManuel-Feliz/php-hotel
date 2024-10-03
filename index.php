<?php
// HOTELS ARRAY
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

// INFO_HOTEL ARRAY
$descrpition_info = ['Nome Hotel', 'Nr.Stelle', 'Parccheggio', 'Distanza dal centro città'];

/* $bool_to_string = $hotels['parking'] ? 'true' : 'false';
 */
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
    <!-- MAIN -->
    <main class="py-5">
        <!-- TABLE CONTAINER -->
        <div class="container">
            <table class="table table-secondary table-striped table-hover table-bordered border-danger text-center">
                <!-- TABLE HEADING -->
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <!-- FOREACH LOOP FOR DESCRIPTION_INFO ARRAY-->
                        <?php foreach ($descrpition_info as $key => $info) { ?>
                            <th scope="col"><?php echo  $info   ?></th>
                        <?php } ?>
                    </tr>
                </thead>

                <!-- TABLE BODY -->
                <tbody>
                    <tr>
                        <!-- FOREACH LOOP FOR HOTELS ARRAY -->
                        <?php foreach ($hotels as $key => $hotel) { ?>
                            <!-- DESCRIPTION HOTELS -->
                            <th scope="row"><?php echo $hotel['description'] ?></th>
                            <!-- HOTELS NAME -->
                            <td><?php echo $hotel['name'] ?></td>
                            <!-- HOTELS STARS -->
                            <td><?php echo $hotel['vote'] ?></td>
                            <!-- HOTELS BOOLEAN VALUE FOR PARKING -->
                            <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                            <!-- HOTELS DISTANCE IN KM -->
                            <td><?php echo $hotel['distance_to_center'] . 'Km' ?></td>
                    </tr>
                <?php }  ?>
                </tbody>

        </div>
    </main>
</body>

</html>