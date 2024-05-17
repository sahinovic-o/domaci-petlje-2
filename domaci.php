<?php

$navLinks = [
    "Glavna" => "index.php",
    "O nama" => "about us.php",
    "Kontakt" => "contact.php"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci Petlje 2</title>
</head>
<body>
    
<?php foreach($navLinks as $link => $address):?>
    <nav>
       <a href=<?= $address?>><?= $link ?></a>
    </nav>
<?php endforeach;?>

</body>
</html>