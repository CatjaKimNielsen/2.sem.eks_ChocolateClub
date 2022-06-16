
<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Kontakt </title>
    <meta name="description" content="Der er mange muligheder for at komme i kontakt med Chocolate Club. Vi har både en
    kontaktformular, et telefonnummer, en a-mail og du er også mere end velkommen til at besøge os på vores adresse.">
    <meta name="robots" content="All">
    <meta name="author" content="Catja Kim Nielsen & Susane Buch">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Chocolate Club | Kontakt">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.catjakimnielsen.dk/Eksamner/2.semester/Kontakt.php">
    <meta property="og:image" content="https://www.catjakimnielsen.dk/Eksamner/2.semester/image/ChocolateClub_Slider_5chokolader.png">
    <meta property="og:description" content="Der er mange muligheder for at komme i kontakt med Chocolate Club. Vi har både en
    kontaktformular, et telefonnummer, en a-mail og du er også mere end velkommen til at besøge os på vores adresse.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <style> body{background-color: rgba(248,242,239,0.89)} </style>
    <style> a:link{color: black; text-decoration: none;} a:hover{text-decoration: underline} </style>

    <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@0;1&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

</head>


<body>

    <?php include "includes/header.php"; ?>

    <section class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-8">
                <div class="text-center p-4">
                    <h1 class="overskrift">KONTANTFORMULAR</h1>
                </div>
                <div method="get" action="index.html">
                    <label for="Navn" class="name">Fulde navn</label>
                    <br>
                    <input id="Navn" class="formularboks w-100" name="Navn" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Nummer" class="tlf">Telefon nr</label>
                    <br>
                    <input id="Nummer" class="formularboks w-100" name="Nummer" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Email" class="email">E-mail</label>
                    <br>
                    <input name="Email" class="formularboks w-100" type="email" id="Email" placeholder="" value="">
                    <br><br>
                    <label for="Emne" class="subject">Emne</label>
                    <br>
                    <input id="Emne" class="formularboks w-100" name="Emne" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Besked" class="besked">Din besked</label>
                    <br>
                    <textarea id="Besked" class="formularboks w-100" name="Besked" placeholder=""></textarea>
                    <br><br>
                    <input type="submit" class="btn btn-sm bg-header_footer shadow w-50 tekst" value="Send besked">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4">
                <div class="text-center p-4">
                    <h2 class="overskrift">ÅBNINGSTIDER</h2>
                </div>
                <p class="tekst text-center"> Vi tager meget gerne imod dig i vores butik på Silkegade 7 ved Strøget, hvis du helst vil tage en snak. </p>
                <br>
                <p class="tekst text-center"> Mandag: 10.00 - 16.00 <br> Tirsdag: lukket <br> Onsdag: lukket <br> Torsdag lukket <br> Fredag: 10.00 - 16.00 <br> Lørdag: 10.00 - 18.00 <br> Søndag: lukket </p>
                <br>
                <div class="text-center p-4">
                    <h2 class="overskrift">TELEFONTIDER</h2>
                </div>
                <p class="tekst text-center text-decoration-underline"> +45 1717 7171</p>
                <br>
                <p class="tekst text-center"> Telefonen har åbent i butikkens åbningstider. </p>
            </div>
        </div>
    </section>





    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
