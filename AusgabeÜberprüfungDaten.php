<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daten- überprüfen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        html {
            overflow-x: hidden;
        }
    </style>
</head>

<body>

<?php 
            # Variablen hier definieren und mit if statement prüfen ob Post Daten liefert
            if(isset($_POST["FormSelectStudio"])){
                $Studio = $_POST["FormSelectStudio"];
            }
            else{
                $Studio = "";
            }
            
            if(isset($_POST["FormSelectTarif"])){
                $Tarif = $_POST["FormSelectTarif"];
            }
            else{
                $Tarif="Basic";
            }

            if(isset($_POST["inputVName"])){
                $Vorname = $_POST["inputVName"];
            }
            else{
                $Vorname="";
            }
            
            if(isset($_POST["inputNName"])){
                $Nachname = $_POST["inputNName"];
            }
            else{
                $Nachname="";
            }
            
            if(isset($_POST["FormSelectGender"])){
                $Geschlecht = $_POST["FormSelectGender"];
            }
            else{
                $Geschlecht="";
            }
            
            if(isset($_POST["inputGeburtstag"])){
                $Geburtstag = $_POST["inputGeburtstag"];
            }
            else{
                $Geburtstag="";
            }

            if(isset($_POST["inputStraße"])){
                $Straße = $_POST["inputStraße"];
            }
            else{
                $Straße="";
            }

            if(isset($_POST["inputHN"])){
                $HausNr = $_POST["inputHN"];
            }
            else{
                $HausNr="";
            }
            
            if(isset($_POST["inputPLZ"])){
                $Plz = $_POST["inputPLZ"];
            }
            else{
                $Plz="";
            }

            if(isset($_POST["inputOrt"])){
                $Ort = $_POST["inputOrt"];
            }
            else{
                $Ort="";
            }

            if(isset($_POST["inputEmail"])){
                $Email = $_POST["inputEmail"];
            }
            else{
                $Email = "";
            }

            if(isset($_POST["newsletterTRUE"]))
            {
                $newsletter = 1;
                #$NewsletterJN = "Ja";
            }        
            else
            {
                $newsletter = 0;
                #$NewsletterJN = "Nein";
            }

            if(isset($_POST["inputTLF"])){
                $Telefon = $_POST["inputTLF"];
            }
            else{
                $Telefon="";
            }

            if(isset($_POST["inputKontoinhaber"])){
                $Kontoinhaber = $_POST["inputKontoinhaber"];
            }
            else{
                $Kontoinhaber="";
            }

            if(isset($_POST["inputIBAN"])){
                $Iban = $_POST["inputIBAN"];
            }
            else{
                $Iban="";
            }         
        ?>

    <nav class="navbar" style="transform: translate(15%); left: 10%;">
        <ul class="nav navbar-nav navbar-right">
            <li><img src="images/logo3.png"></li>
        </ul>
    </nav>

    <h1 style="text-align: center;">Sind die angegebenen Werte richtig?</h1>
    <form action="HinzufügenZurDatenbank.php" method="post">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="FormSelectStudio_">Ausgewählter Standort:</label>
                    <input type="text" class="form-control" name="FormSelectStudio_" value=<?php echo $Studio?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="FormSelectTarif_">Ausgewählter Standort:</label>
                    <input type="text" class="form-control" name="FormSelectTarif_" value=<?php echo $Tarif?>>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputVName_">Vorname:</label>
                    <input type="text" class="form-control" name="inputVName_" value=<?php echo $Vorname?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputNName_">Nachname:</label>
                    <input type="text" class="form-control" name="inputNName_" value=<?php echo $Nachname?>>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="FormSelectGender_">Geschlecht:</label>
                    <input type="text" class="form-control" name="FormSelectGender_" value=<?php echo $Geschlecht?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputGeburtstg_">Geburtsdatum:</label>
                    <input type="text" class="form-control" name="inputGeburtstg_" value=<?php echo $Geburtstag?>>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputStraße_">Straße:</label>
                    <input type="text" class="form-control" name="inputStraße_" value=<?php echo $Straße?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputHN_">Hausnummer:</label>
                    <input type="text" class="form-control" name="inputHN_" value=<?php echo $HausNr?>>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputPLZ_">PLZ:</label>
                    <input type="text" class="form-control" name="inputPLZ_" value=<?php echo $Plz?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputOrt_">Ort:</label>
                    <input type="text" class="form-control" name="inputOrt_" value=<?php echo $Ort?>>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputEmail_">Email:</label>
                    <input type="text" class="form-control" name="inputEmail_" value=<?php echo $Email?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="newsletterTRUE_">Newsletter:</label>
                    <input type="text" class="form-control" name="newsletterTRUE_" value=<?php echo $newsletter?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputTLF_">Telefonnummer:</label>
                    <input type="text" class="form-control" name="inputTLF_" value=<?php echo $Telefon?>>
                </div>
            </div>

            <!-- Hier bräuchten wir nochmal das Pattern für die beiden Felder-->

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputKontoinhaber_">Kontoinhaber:</label>
                    <input type="text" class="form-control" name="inputKontoinhaber_" value=<?php echo $Kontoinhaber?>>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputIBAN_">IBAN:</label>
                    <input type="text" class="form-control" name="inputIBAN_" value=<?php echo $Iban?>>
                </div>
            </div>
    
          <input type="submit" class="btn btn-primary " name="test" id="test" value="An Datenbank übertragen" />
        </form>
    </div>

        <?php 
            $servername = "localhost";
            $user = "root";
            $pw = "";
            $db = "sportstudio";

            if(isset($_POST['test']))
            {
                InsertIntoDatabase();
            }

            function InsertIntoDatabase()
            {
                #Baut Verbindung mit der Datenbank auf
                $con = new mysqli($servername, $user, $pw, $db);

                if($con->connect_error){
                    die("Verbindung zur Datenbank fehlgeschlagen.".$con->connect_error);
                }
                else{
                    echo "Verbindung zur Datenbank steht!";
                }

                #Statement
                $sql = "INSERT INTO mitglieder (MitgliedNr, FitnessStudio, Tarif, Vorname, Nachname, Geschlecht, Geburtsdatum, Straße, Hausnummer, Plz, Ort, Email, Newsletter, Telefon, Kontoinhaber, IBAN) VALUES ('', '". $_POST["FormSelectStudio"] ."', '". $_POST["FormSelectTarif"] ."', '". $_POST["inputVName"] ."', '". $_POST["inputNName"] ."', '". $_POST["FormSelectGender"] ."', '". $_POST["inputGeburtstag"] ."', '". $_POST["inputStraße"] ."', '". $_POST["inputHN"] ."', '". $_POST["inputPLZ"] ."', '". $_POST["inputOrt"] ."', '". $_POST["inputEmail"] ."', $newsletter, '". $_POST["inputTLF"] ."', '". $_POST["inputKontoinhaber"] ."', '". $_POST["inputIBAN"] ."');";

                #Hier wird das Statement ausgeführt und überprüft ob es erfolgreich war
                if($con->query($sql) === TRUE)
                {
                    #Erfolgreich übertragen
                    echo "query succeded!";
                }     
                else
                {
                    #Übertragung fehlgeschlagen
                    echo "Query Faield" . $con->error;
                }

                $con->close();
            }
        ?>

        <footer class="bg-light ">
            <div class="container p-4 ">
                <div class="row ">
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
                </div>
            </div>
            <div class="text-center p-3 " style="background-color: steelblue; margin-right: auto; ">
                © 2020 Copyright:
                <a class="text-dark ">Sportsudio-Wolkenfeld</a>
            </div>
        </footer>
    </body>
</html>
