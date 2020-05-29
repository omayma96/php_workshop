<?php
$NomFilm = $_GET["NomFilm"];
$Acteur = $_GET ["Acteur"];
$Date = $_GET ["Date"];

?
>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><strong> informations about <?php echo "$NomFilm"; ?>:</strong></h2>
       <h4> <?php echo "§Acteur";?> started in the movie <?php echo "$NomFilm"; ?> which was released in year <?php echo "$Date"; ?><h4>
     
</body>
</html>
