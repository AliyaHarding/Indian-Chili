<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="een restaurant die indiaanse eten maakt">
    <meta name="author" content="A. Harding">
    <meta name="keywords" content="restaurant, indiaanse eten maakt">
    <title>Indian Chillis - Home</title>
    <link rel="icon" href="img/chili-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="lib/java.js" defer></script>
    <script src="lib/menu.js" defer></script>
</head>
<body>
    <header>
        <img src="img/chili-beeld.png" alt="chilli beeld" class="beeld">
        <article id="nav">
            <a href="Home.php">HOME</a>
            <a href="pages/Menu/Menu.php">MENU</a>
            <a href="pages/Gallery/Gallery.php">GALLERY</a>
            <a href="pages/Reservation/reservering.php">RESERVERING</a>
            <a href="pages/About-us/About.php">ABOUT US</a>
            <a href="pages/Vacature/vacature.php">VACATURES</a>
        </article>
        <img src="img/hamburger.png" alt="hamburger menu" class="Hamburger" <?php echo "onclick= \"hamburgerMenu()\"";?>>
    </header>
    <main>
        <section class=" grid">
            <section class="title">
                <h1 class="marg40">TOP 3 GERECHTEN</h1>
                <?php 
                $fotos = array('<img src="img/masala-dosa.jpg" alt="masala dosa" width="910px" height="300px" class="slide">', 
                '<img src="img/butter-chicken.jpg" alt="butter chicken" width="910px" height="300px" class="slide">',
                '<img src="img/biryani.jpg" alt="biryani" width="910px" height="300px" class="slide">');
                ?>
                <center>
                    <article class="slideshow">
                        <?php 
                        foreach($fotos as $foto){
                            echo $foto;
                        }
                        ?>
                    </article>
                </center>
            </section>
            <br>
            <hr>
            <br>
            <section class=" home-grid gap30 gap10 center2">
                <div class="homeGrid2">
                    <article class="restaurant">
                       <center><img src="img/restaurant.jpg" alt="restaurant" width="300px" height="300px"></center> 
                    </article>
                </div>
                <div class="homeGrid1">
                    <p>De keuze om een ​​Indiaas restaurant op te richten is een smaakvolle beslissing, geworteld in het rijke erfgoed van cultureel erfgoed en de universele aantrekkingskracht van de Indiase keuken. De gevarieerde en aromatische aard van Indiase gerechten, in combinatie met hun wijdverbreide populariteit, maakt het openen van een Indiaas restaurant tot een aantrekkelijke en lonende onderneming. <br><br>

                        Ten eerste staat de Indiase keuken bekend om zijn levendige smaken en aromatische kruiden, waardoor een unieke en verleidelijke culinaire ervaring ontstaat. De ingewikkelde mix van kruiden en specerijen in Indiase gerechten spreekt een breed spectrum aan smaakvoorkeuren aan, van degenen die van milde en hartige smaken houden tot degenen die op zoek zijn naar gedurfde en pittige smaken. Dankzij deze veelzijdigheid kan een Indiaas restaurant een divers klantenbestand bedienen, waardoor een wijdverspreide en blijvende aantrekkingskracht wordt gegarandeerd. <br>                      
                    </p>
                </div>
               
                
            </section>
        </section>
    </main>
    <footer>
        <section>
            <div class="icons">
                <img src="img/social-media.png" alt="social media">
            </div>
        </section>
        <section>
            <p>Gemaakt door Aliya Harding</p>
        </section>
        <section>
            <p>Contact gegevens: <br>
                Tel: +31 6 18229439 <br>
                email:6040665@mborijnland.nl
            </p>
        </section>
    </footer>
</body>
</html>