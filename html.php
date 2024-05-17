<?php

$imena = ["Omar", "Vedad", "Edin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
</head>


<body>
    <?php

    // NO NOOOO  NOOO
    foreach($imena as $ime){
        echo "<p>$ime</p>";
    }
    ?>

    <?php foreach($imena as $ime){ ?>
    <p><?php echo $ime ?></p>
    <?php } ?>
    
    /* NAJBOLJI NACIN */
    <?php foreach($imena as $ime):?>

        <p><?=  $ime ?></p>

    <?php endforeach;?>

</body>



</html>