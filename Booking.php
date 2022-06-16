<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Booking </title>
    <meta name="description" content="Hos Chokolate Club laver vi personlig chokolade. Book en tid til møde i butikken og så finder vi sammen frem til hvordan dine ønsker skal formes i chokolade.">
    <meta name="robots" content="All">
    <meta name="author" content="Catja Kim Nielsen & Susana Buch">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Chocolate Club | Booking">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.catjakimnielsen.dk/Eksamner/2.semester/Booking.php">
    <meta property="og:image" content="https://www.catjakimnielsen.dk/Eksamner/2.semester/image/ChocolateClub_Logo_Original_Transparent.png">
    <meta property="og:description" content="Hos Chokolate Club laver vi personlig chokolade. Book en tid til møde i butikken og så finder vi sammen frem til hvordan dine ønsker skal formes i chokolade.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <style> body{background-color: rgba(248,242,239,0.89)} </style>
    <style> a:link{color: black; text-decoration: none;} </style>

</head>


<link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@0;1&family=Pathway+Gothic+One&display=swap" rel="stylesheet">


<body>

    <?php include "includes/header.php"; ?>


    <section class="container text-center mt-5 mb-5 ps-5 pe-5">
        <h1 class="overskrift"> BOOKING </h1>
        <br>
        <p class="tekst"> Hos Chocolate Club producere vi chokolader lige efter dine ønsker. Book tid og så finder vi frem til, hvordan vi skal udføre dine ønsker i den lækreste chokolade. </p>
    </section>


    <section class="container mt-2">
        <div class="calendar row mx-auto">
            <div class="col-12 col-sm-6 col-xl-6">
                <div class="text-center p-4">
                    <h2 class="overskrift">Vælg dato</h2>
                </div>
                <div class="calendar__opts tekst">
                    <select name="calendar__month" id="calendar__month">
                        <option class="tekst">Januar</option>
                        <option class="tekst">Februar</option>
                        <option class="tekst">Marts</option>
                        <option class="tekst">April</option>
                        <option class="tekst">Maj</option>
                        <option selected class="tekst">Juni</option>
                        <option class="tekst">Juli</option>
                        <option class="tekst">August</option>
                        <option class="tekst">September</option>
                        <option class="tekst">Oktober</option>
                        <option class="tekst">November</option>
                        <option class="tekst">December</option>
                    </select>
                    <select name="calendar__year" id="calendar__year" class="tekst">
                        <option selected class="tekst">2022</option>
                        <option class="tekst">2023</option>
                    </select>
                </div>
                <div class="calendar__body">
                    <div class="calendar__days">
                        <div class="tekst">M</div>
                        <div class="tekst">T</div>
                        <div class="tekst">O</div>
                        <div class="tekst">T</div>
                        <div class="tekst">F</div>
                        <div class="tekst">L</div>
                        <div class="tekst">S</div>
                    </div>
                    <div class="calendar__dates">
                        <div class="calendar__date calendar__date--grey tekst"><span>30</span></div>
                        <div class="calendar__date calendar__date--grey tekst"><span>31</span></div>
                        <div class="calendar__date tekst"><span>1</span></div>
                        <div class="calendar__date tekst"><span>2</span></div>
                        <div class="calendar__date tekst"><span>3</span></div>
                        <div class="calendar__date tekst"><span>4</span></div>
                        <div class="calendar__date tekst"><span>5</span></div>
                        <div class="calendar__date tekst"><span>6</span></div>
                        <div class="calendar__date tekst"><span>7</span></div>
                        <div class="calendar__date tekst"><span>8</span></div>
                        <div class="calendar__date tekst"><span>9</span></div>
                        <div class="calendar__date tekst"><span>10</span></div>
                        <div class="calendar__date tekst"><span>11</span></div>
                        <div class="calendar__date tekst"><span>12</span></div>
                        <div class="calendar__date tekst"><span>13</span></div>
                        <div class="calendar__date tekst"><span>14</span></div>
                        <div class="calendar__date tekst"><span>15</span></div>
                        <div class="calendar__date tekst"><span>16</span></div>
                        <div class="calendar__date tekst"><span>17</span></div>
                        <div class="calendar__date tekst"><span>18</span></div>
                        <div class="calendar__date tekst"><span>19</span></div>
                        <div class="calendar__date tekst"><span>20</span></div>
                        <div class="calendar__date calendar__date--selected calendar__date--last-date calendar__date--range-end"><span>21</span></div>
                        <div class="calendar__date tekst"><span>22</span></div>
                        <div class="calendar__date tekst"><span>23</span></div>
                        <div class="calendar__date tekst"><span>24</span></div>
                        <div class="calendar__date tekst"><span>25</span></div>
                        <div class="calendar__date tekst"><span>26</span></div>
                        <div class="calendar__date tekst"><span>27</span></div>
                        <div class="calendar__date tekst"><span>28</span></div>
                        <div class="calendar__date tekst"><span>29</span></div>
                        <div class="calendar__date tekst"><span>30</span></div>
                        <div class="calendar__date calendar__date--grey tekst"><span>1</span></div>
                        <div class="calendar__date calendar__date--grey tekst"><span>2</span></div>
                        <div class="calendar__date calendar__date--grey tekst"><span>3</span></div>
                    </div>
                    <div class="p-3">
                        <label for="tidspunkt" class="subject tekst">Vælg tidspunkt</label>
                        <br>
                        <select id="tidspunkt" class="w-100 tekst" name="tidspunkt" type="text">
                            <option class="tekst" value="tidspunkt"> kl. 10.00 </option>
                            <option class="tekst" value="tidspunkt"> kl. 10.30 </option>
                            <option class="tekst" value="tidspunkt"> kl. 11.00 </option>
                            <option class="tekst" value="tidspunkt"> kl. 11.30 </option>
                            <option class="tekst" value="tidspunkt"> kl. 12.30 </option>
                            <option class="tekst" value="tidspunkt"> kl. 13.00 </option>
                            <option class="tekst" value="tidspunkt"> kl. 13.30 </option>
                            <option class="tekst" value="tidspunkt"> kl. 14.00 </option>
                            <option class="tekst" value="tidspunkt"> kl. 14.30 </option>
                            <option class="tekst" value="tidspunkt"> kl. 15.00 </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-6">
                <div class="text-center p-4">
                    <h2 class="overskrift">Dine informationer</h2>
                </div>
                <form>
                    <label for="Navn" class="name tekst">Fulde navn</label>
                    <br>
                    <input id="Navn" class="formularboks w-100 tekst" name="Navn" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Nummer" class="tlf tekst">Telefon nr</label>
                    <br>
                    <input id="Nummer" class="formularboks w-100 tekst" name="Nummer" type="text" placeholder="" value="">
                    <br><br>
                    <label for="Email" class="email tekst">E-mail</label>
                    <br>
                    <input name="Email" class="formularboks w-100 tekst" type="email" id="Email" placeholder="" value="">
                    <br><br>
                    <label for="besked" class="besked tekst">Dine kommentarer til mødet</label>
                    <br>
                    <textarea id="besked" class="formularboks w-100 tekst" name="besked" placeholder=""></textarea>
                    <br><br>
                    <input type="submit" class="btn btn-sm bg-header_footer shadow w-50 tekst" value="Bekræft booking">
                </form>
            </div>
        </div>
    </section>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
