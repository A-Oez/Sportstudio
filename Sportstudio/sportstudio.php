<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sportstudio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        html {
            overflow-x: hidden;
        }
    </style>
</head>

<!-- Optimize placing of elements -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="transform: translateX(15%); left: 10%;">
        <ul class="nav navbar-nav navbar-right">
            <li><img src="images/logo3.png"></li>
        </ul>
    </nav>

    <form action="verarbeitung.php" method="POST">

        <!--Container: Obere Seite der HTML Page (Dropdowns + Newsletter)-->
        <div class="container " style="margin-right: 200px; margin-top: 50px; margin-bottom: 50px;">
            <form role=" form " class="col-xs-3 ">
                <div class="form-row ">
                    <div class="form-group ">
                        <label for="FormSelectStudio ">Standort:</label>
                        <select class="form-control " id="FormSelectStudio ">
                           <option>Heilbronn</option>
                           <option>Öhringen</option>
                           <option>Weinsberg</option>
                           <option>Stuttgart</option>
                           <option>Frankfurt</option>
                           <option>Nürnberg</option>
                         </select>
                    </div>

                    <div class="form-group " style="margin-left: 30px;" id="TarifAuswahl">
                        <label for="FormSelectTarif ">Tarif: </label>
                        <select class="form-control " id="FormSelectTarif ">
                                  <option>Basic</option>
                                  <option>Classic</option>
                                  <option>Premium</option>
                                </select>
                    </div>

                    <div class="image" style="margin-left: 50px;">
                        <img src="images/ImageHantel.png">
                    </div>
                </div>

                <input type="checkbox" name="newsletterTRUE" />
                <em>Newsletter abbonnieren?</em>
            </form>

        </div>

        <hr style="width: auto; height: 1px; background-color:steelblue; margin: 0px; "></hr>

        <section class="text-center;" style="margin-top: 50px; margin-left: 10px;" id="Tarifinfos">
            <h4 class="text-uppercase" style="margin-left: 10px;">Tarif- Infos:</h4>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0;">
                <h5 style="margin-top: 20px;">Basic</h5>
                <ul>
                    <li>
                        <a> <strong>Preis:</strong> 24,90€ <em> Monatlich</em></a>
                    </li>

                    <li>
                        <a> <strong>Vertragslaufzeit:</strong> Monatlich kündbar</a>
                    </li>

                    <li>
                        <a> <strong>Studiozugang:</strong> 1- Studio</a>
                    </li>
                </ul>

                <h5 style="margin-top: 20px;">Classic</h5>
                <ul>
                    <li>
                        <a> <strong>Preis:</strong> 34,90€ <em> Monatlich</em></a>
                    </li>

                    <li>
                        <a> <strong>Vertragslaufzeit:</strong> Monatlich kündbar</a>
                    </li>

                    <li>
                        <a> <strong>Studiozugang:</strong> 3- Studios </a>
                    </li>
                </ul>

                <h5 style="margin-top: 20px;">Premium</h5>
                <ul>
                    <li>
                        <a> <strong>Preis:</strong> 44,90€ <em> Monatlich</em></a>
                    </li>

                    <li>
                        <a> <strong>Vertragslaufzeit:</strong> Monatlich kündbar</a>
                    </li>

                    <li>
                        <a> <strong>Studiozugang:</strong> Alle- Studios </a>
                    </li>
                </ul>

            </div>

        </section>


        <div class="container " style="margin-left: 570px; margin-top: -445px; ">
            <h2>Anmeldedaten:</h2>
            <div class="row ">
                <form role="form " class="col-xs-3 ">

                    <div class="form-row ">
                        <div class="form-group col-md-6 ">
                            <label for="FormSelectGender ">Geschlecht</label>
                            <select multiple class="form-control " id="FormSelectGender ">
                              <option>Männlich</option>
                              <option>Weiblich</option>
                              <option>Divers</option>
                            </select>
                        </div>

                        <div class="image ">
                            <img src="images/bodyImagejpg.jpg ">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 ">
                            <label for="inputVName ">Vorname</label>
                            <input type="text " class="form-control " id="inputVName ">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputNName ">Nachname</label>
                            <input type="text " class="form-control " id="inputNName ">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputGeburtstag ">Geburtstag</label>
                        <input type="text " class="form-control " id="inputGeburtstag " placeholder="DD-MM-YYYY ">
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 ">
                            <label for="inputStraße ">Straße</label>
                            <input type="text " class="form-control " id="inputStraße " placeholder="Straße ">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputHN ">Hausnummer</label>
                            <input type="text " class="form-control " id="inputHN " placeholder="Hausnummer: ">
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="inputPLZ ">Postleitzahl</label>
                            <input type="text " class="form-control " id="inputPLZ " placeholder="Postleitzahl ">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputOrt ">Ort</label>
                            <input type="text " class="form-control " id="inputOrt " placeholder="Ort ">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 ">
                            <label for="inputTLF ">Telefonnummer:</label>
                            <input type="text " class="form-control " id="inputTLF " placeholder="Telefonnummer: ">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail ">Email:</label>
                            <input type="email " class="form-control " id="inputEmail " placeholder="example@xyz.com ">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6 ">
                            <label for="inputKontoinhaber ">Kontoinhaber</label>
                            <input type="text " class="form-control " id="inputKontoinhaber " placeholder="Vor- & Nachname ">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputIBAN ">IBAN</label>
                            <input type="text " class="form-control " id="inputIBAN " placeholder="DE23100000001234567890 ">
                        </div>
                    </div>
                    <button type="submit " class="btn btn-primary " style="background-color: steelblue; margin-bottom: 50px; ">Registrieren</button>
                </form>
            </div>
        </div>

    </form>

    <!-- Footer -->
    <footer class="bg-light " ; id="footer ">

        <!-- Grid container -->
        <div class="container p-4 ">
            <!--Grid row-->
            <div class="row ">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0; text-center " style="margin-left: 250px ">
                    <h5 class="text-uppercase ">Kontakt</h5>

                    <ul class="list-unstyled mb-0 ">
                        <li>
                            <a class="text-dark ">Telefonnummer: 01572-3400569</a>
                        </li>
                        <li>
                            <a class="text-dark ">InfoSportstudioWolkenfeld@gmail.com </a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0; text-center " style="margin-left: 50px; ">
                    <h5 class="text-uppercase mb-0 ">Anschrift (Zentralsitz)</h5>

                    <ul class="list-unstyled ">
                        <li>
                            <a class="text-dark ">Sportstudio Wolkenfeld</a>
                        </li>
                        <li>
                            <a class="text-dark ">Neue Gartenstraße 12</a>
                        </li>
                        <li>
                            <a class="text-dark ">74072 Heilbronn</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>

        <div class="text-center p-3 " style="background-color: steelblue; margin-right: auto; ">
            © 2020 Copyright:
            <a class="text-dark ">Sportsudio-Wolkenfeld</a>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>