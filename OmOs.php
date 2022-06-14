<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Om os </title>
    <meta name="description" content="Vores fælles kærlighed er chokolade - derfor er vi alle 3 uddannet chocolatiers. Vi er Tobias Trads med speciale i børn og barnlige sjæle, Amalie Mikkelsen med speciale i det eksklusive og kvalitet til kræsne og Frederik Wolmar med speciale i chokolade til alle begivenheder.">
    <meta name="robots" content="All">
    <meta name="author" content="Catja Kim Nielsen & Susana Buch">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Chocolate Club | Om os">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="Vores fælles kærlighed er chokolade - derfor er vi alle 3 uddannet chocolatiers. Vi er Tobias Trads med speciale i børn og barnlige sjæle, Amalie Mikkelsen med speciale i det eksklusive og kvalitet til kræsne og Frederik Wolmar med speciale i chokolade til alle begivenheder.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <style> body{background-color: rgba(248,242,239,0.89)} </style>
    <style> a:link{color: black; text-decoration: none;} a:hover{text-decoration: underline} </style>

</head>


<link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@0;1&family=Pathway+Gothic+One&display=swap" rel="stylesheet">


<body>

    <?php include "includes/header.php"; ?>


    <section class="container text-center mt-5 ps-5 pe-5">
        <h1 class="overskrift"> 3 CHOCOLATIERS MED ÉN FÆLLES KÆRLIGHED </h1>
        <br>
        <p class="tekst"> Måske ser vi forskellige ud og måske har vi ikke samme alder, men det VI har tilfældes er vores kærlighed til chokolade. Læs mere om os herunder.</p>
    </section>


    <section class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-xl-4">
                <br><br>
                <h2 class="overskrift"> TOBIAS TRADS </h2>
                <br>
                <img src="image/TobiasTrads.jpg" alt="Chocolatier Tobias">
                <p class="p-3 tekst"> Tobias laver alverdens chokolader til børn og barnlige sjæle. Så hvis du skal forkæle dine børn med noget ekstra god chokolade eller kender en som har en liiidt barnlig sjæl, så er Tobias' chokolader de helt rigtige. </p>
                <div>
                    <p> <a class="btn btn-sm bg-header_footer shadow w-100 tekst" data-bs-toggle="collapse" href="#collapseTobias" role="button" aria-expanded="false" aria-controls="collapseTobias"> Se hans arbejde </a> </p>
                    <div class="collapse" id="collapseTobias">
                        <div class="card card-body">
                            <img src="image/Mælkechokolade.png" alt="Frø af mælkechokolade">
                            <br>
                            <a class="btn btn-sm bg-header_footer shadow w-100 tekst" href="SmåtMenGodt.php"> Se mere </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4">
                <br><br>
                <h2 class="overskrift"> AMALIE MIKKELSEN </h2>
                <br>
                <img src="image/Amalie.jpg" alt="Chocolatier Amalie">
                <p class="p-3 tekst"> Amalie har øje for eksklusivitet og den bedste kvalitet - derfor producere hun kun den bedste eksklusive kvalitetschokolade. Amalie har også for øje, at der også findes kræsne chokoladeelskere og det kommer til udtryk i hendes chokoladearbejde. </p>
                <div>
                    <p> <a class="btn btn-sm bg-header_footer shadow w-100 tekst" data-bs-toggle="collapse" href="#collapseAmalie" role="button" aria-expanded="false" aria-controls="collapseAmalie"> Se hendes arbejde </a> </p>
                    <div class="collapse" id="collapseAmalie">
                        <div class="card card-body">
                            <img src="image/MørkChokolade.png" alt="Ren mørk chokolade">
                            <br>
                            <a class="btn btn-sm bg-header_footer shadow w-100 tekst" href="HeltUdenTwist.php"> Se mere </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4">
                <br><br>
                <h2 class="overskrift"> FREDERIK WOLMAR </h2>
                <br>
                <img src="image/Frederik.jpg" alt="Chocolatier Frederik">
                <p class="p-3 tekst"> Frederik har speciale i, at producere lækre chokolader til alle typer begivenheder. Det kan fx være dit bryllup, en 50´ års fødselsdag, sølvbyllup, en børnefødselsdag eller noget helt femte. </p>
                <div>
                    <p> <a class="btn btn-sm bg-header_footer shadow w-100 tekst" data-bs-toggle="collapse" href="#collapseFrederik" role="button" aria-expanded="false" aria-controls="collapseFrederik"> Se hans arbejde </a> </p>
                    <div class="collapse" id="collapseFrederik">
                        <div class="card card-body">
                            <img src="image/Chokolade_med_Kokos.png" alt="Lys chokolade med kokos">
                            <br>
                            <a class="btn btn-sm bg-header_footer shadow w-100 tekst" href="BetydningsfuldeMinder.php"> Se mere </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>


</html>