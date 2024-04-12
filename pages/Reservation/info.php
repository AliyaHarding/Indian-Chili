<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="maak een reservering bij ons restaurant op onze website">
    <meta name="author" content="A. Harding">
    <meta name="keywords" content="reservering bij ons, Indian Chillis, indian chillis">
    <title>Indian Chillis - Reservation</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <link rel="icon" href="../../img/chili-icon.png" type="image/x-icon">
    <script src="../../lib/menu.js" defer></script>
</head>
<body>
<style>
        body{
            background-image: url(../../img/restaurant.jpg);
            background-size: cover;
        }
    </style>
    <main>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $datum = $_POST["reservation"];
    $tijd = $_POST["appt"];
    $gast = $_POST["mensen"];

    echo "  <section class= 'overlay' id='popUp'>
    <section class='popUp-wrap'>
        <a href='reservering.php' class='close'>&times;</a>
        <section class='content'>
            <section class='container'>
                        <p>Beste ".$name.", <br><br> uw reservering is geplaatst op <b>".$datum."</b> om <b>".$tijd."</b> voor <b>".$gast." mensen</b>.<br> uw reservering wordt automatisch in ons systeem gezet <br><br> Tot straks!!</p>
                        <?php } ?>
            </section>

        </section>

    </section>
</section>";
}
?>
    </main>
</body>
</html>