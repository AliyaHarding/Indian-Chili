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
            display: unset;
        }
    </style>
    <?php include '../header/header.php' ?>
    <main>
            <form action="info.php" method="POST">
                <label for="fname">Volledige naam:</label>
                <input type="text" id="name" name="name" placeholder="Uw Naam..." autocomplete="off" required>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Uw Email..." autocomplete="off" required>
                <label for="phone">Telefoon nummer:</label>
                <input type="tel" id="phone" name="phone" placeholder="Uw Telefoon nummer..." autocomplete="off" required>
                <label>Datum van uw reservering:</label>
                <input type="date" id="reservation" name="reservation" required>
                <label >Selecteer een tijd:</label>
                <input type="time" id="appt" name="appt" required>
                <label>Hoeveel mensen:</label>
                <input type="number" id="mensen" name="mensen" min="2" max="200" placeholder="Selecteer een aantal..." required>
                <a href="Policy/policy.html" target="_blank" class="privacy">Terms and conditions > &#x1F6C8; Privacy Policy</a>            
                <button type="submit">Submit</button>
            </form>
    </main>
    <?php include '../footer/footer.php' ?>
</body>
</html>