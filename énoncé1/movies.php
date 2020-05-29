<?php
$NomFilm = $_GET["NomFilm"];
$Acteur = $_GET["Acteur"];
$Date = $_GET["Date"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><strong> informations about <?php echo "$NomFilm"; ?>:</strong></h1>
       <h2> <?php echo "$Acteur";?> started in the movie <?php echo "$NomFilm"; ?> which was released in year <?php echo "$Date"; ?><h2>
     
</body>
</html>
