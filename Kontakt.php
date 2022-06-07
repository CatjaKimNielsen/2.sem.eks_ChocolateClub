
<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Chocolate Club </title>
    <meta name="description" content="...">
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Chocolate Club">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="...">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <style> body{background-color: rgba(248,242,239,0.89)} </style>
    <style> a:link{color: black; text-decoration: none;} a:hover{text-decoration: underline} </style>

</head>


<link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@0;1&family=Pathway+Gothic+One&display=swap" rel="stylesheet">


<body>

    <?php include "includes/header.php"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-6">
                <div class="text-center p-4">
                    <h1 class="overskrift">KONTANTFORMULAR</h1>
                </div>

                <div method="get" action="index.html">
                    <label for="Navn" class="name">Fulde navn:</label>
                    <br>
                    <input id="Navn" class="formularbox w-50" name="Navn" type="text" placeholder="" value="">
                    <br><br>
                    <label for="email" class="tlf">Telefon nr:</label>
                    <br>
                    <input id="Navn" class="formularbox w-50" name="tlf" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Navn" class="email">E-mail:</label>
                    <br>
                    <input name="email" class="formularbox w-50" type="email" id="email" placeholder="" value="">
                    <br><br>
                    <label for="Navn" class="subject">Emne:</label>
                    <br>
                    <input id="Navn" class="formularbox w-50" name="Navn" type="text" placeholder="" value="">
                    <br><br>
                    <label for="besked" class="besked">Din besked</label>
                    <br>
                    <textarea id="besked" class="formularbox w-100" name="besked" placeholder=""></textarea>
                    <br><br>
                    <input type="submit" class="sendknap" value="Send besked">
                </div>
            </div>
        </div>
    </div>





    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
