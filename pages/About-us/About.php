<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="een restaurant die indiaanse eten maakt">
    <meta name="author" content="A. Harding">
    <meta name="keywords" content="restaurant, indiaanse eten maakt">
    <title>Indian Chillis - About Us</title>
    <link rel="icon" href="../../img/chili-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="../../lib/menu.js" defer></script>
</head>
<body>
    <style>
        body{
            background-image: url(img/about-background.jpg);
            background-size: cover;
        }

        @media screen and (min-width: 1290px) {
            body{
            background-image: url(img/about-background.jpg);
            background-size: cover;
            display: grid;
        }
        }
    </style>
           <?php include '../header/header.php' ?>

    <main>
        <section class="blok about-grid">
            <section>
                <h1 class="font-40 center">About Us</h1>
            </section>
            <hr>
            <br>
            <section class="about-item gap-5 gap5 center2 rev-link">
               <video width="620px" height="240px" autoplay muted loop>
                <source src="img/restaurantVideo.mp4" type="video/mp4">
                </video>
                <p>Aliya, een gepassioneerd persoon met een diepe waardering voor de Indiase keuken, begon aan een reis om een ​​website te maken voor een Indiaas restaurant, gedreven door een diepe liefde voor het rijke culinaire erfgoed van haar thuisland. <br><br> Geboren en opgegroeid in een gezin waar elke maaltijd een viering was van smaken, kruiden en traditie, erkende Aliya de noodzaak om deze gastronomische ervaring met een breder publiek te delen.
                    De oorsprong van Aliya's streven ligt in haar verlangen om de diverse en authentieke gerechten te laten zien die kenmerkend zijn voor de Indiase keuken. <br><br>
                    Na getuige te zijn geweest van de culinaire magie in de keuken van haar familie, voelde Aliya zich genoodzaakt om dit culturele feest uit te breiden naar een bredere gemeenschap. De website fungeert als een virtuele toegangspoort en nodigt mensen uit om het levendige tapijt van Indiase smaken te verkennen, over geografische grenzen heen. 
                </p> 
                <a href="../Reviews/review.php">Bekijk onze reviews &raquo;</a>
            </section>
            
        </section>
    </main>
    <?php include '../footer/footer.php' ?>
</body>
</html>