<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Chocolate Club </title>
    <meta name="description" content="Hos Chocolate Club laver vi alt i konfekt, ren chokolade og fyldte chokolader. De kan købes i
    vores butik, i vores click & collect eller bestilles efter egne ønsker.">
    <meta name="robots" content="All">
    <meta name="author" content="Catja Kim Nielsen & Susana Buch">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Chocolate Club">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.catjakimnielsen.dk/Eksamner/2.semester/index.php">
    <meta property="og:image" content="https://www.catjakimnielsen.dk/Eksamener/2.semester/image/ChocolateClub_Slider_3chokolader.png">
    <meta property="og:description" content="Hos Chocolate Club laver vi alt i konfekt, ren chokolade og fyldte chokolader.
    De kan købes i vores butik, i vores click & collect eller bestilles efter egne ønsker.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <style> body{background-color: rgba(248,242,239,0.89)} </style>
    <style> a:link{color: black; text-decoration: none;}</style>

    <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@0;1&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

</head>


<body>

    <?php include "includes/header.php"; ?>


    <div id="carouselExampleCaptions" class="carousel carousel-fade slide d-none d-md-block" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="event.php"> <img src="image/ChocolateClub_Slider_5.chokolader.png" class="d-block w-100" alt="5 chokolader i en skal - Åbningsevent" > </a>
            </div>
            <div class="carousel-item">
                <img src="image/ChocolateClub_Slider_3chokolader.png" class="d-block w-100" alt="5 chokolader i æske">
            </div>
            <div class="carousel-item">
                <img src="image/ChocolateClub_Slider_2chokolader.png" class="d-block w-100" alt="Fristende chokolader med marcipan">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>


    <div class="container">

        <div class="row mb-5">
            <div class="col-12 col-md-6 col-xl-4 text-center mt-3 mb-3 order-2 order-md-1">
                <h2 class="overskrift"> <a href="SmåtMenGodt.php"> SMÅT MEN GODT </a> </h2>
                <br>
                <p class="tekst"> Børn og barnlige sjæle skal ikke snydes for en fristende og smagsfuld oplevelse. Se fristelserne nu. </p>
                <br>
                <img src="image/Image_SmåtMenGodt.png" alt="Mærk chokolade med marcipan">
            </div>
            <div class="col-12 col-md-6 col-xl-4 text-center mt-3 mb-3 order-3 order-md-2">
                <h2 class="overskrift"> <a href="BetydningsfuldeMinder.php"> BETYDNINGSFULDE MINDER </a> </h2>
                <br>
                <p class="tekst"> Nogen begivenheder SKAL bare huskes! Og hvorfor ikke huske dem med noget lækkert som chokolade? </p>
                <br>
                <img src="image/Image_BetydningsfuldeMinder.png" alt="Lys chokolade med nougat og hel hasselnød">
            </div>
            <div class="col-12 col-md-6 col-xl-4 text-center mt-3 mb-3 order-4 order-md-3">
                <h2 class="overskrift"> <a href="HeltUdenTwist.php"> HELT UDEN TWIST </a> </h2>
                <br>
                <p class="tekst"> Der skal da også være plads til at være en kræsen chokoladeelsker. Tjek sortimentet ud allerede nu! </p>
                <br>
                <img src="image/Image_HeltUdenTwist.png" alt="Ren mørk chokolade">
            </div>
            <div class="col-12 col-md-6 col-xl-12 text-center mt-3 mb-3 order-1 order-md-4">
                <h2> <a href="Click&Collect.php" class="overskrift"> CLICK & COLLECT </a> </h2>
                <br>
                <p class="tekst"> Hvis du allerede nu er blevet fristet og din mund løber i vand, så har du muligheden for, at benytte vores Click & Collect. </p>
                <br>
                <img src="image/Image_ClickCollect.png" alt="Blandet chokolader fra Chocolate Clubs click & collect">
            </div>
        </div>

    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
