<?php 
    $newsletter = 0; 
?>

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
    <nav class="navbar" style="transform: translate(15%); left: 10%;">
        <ul class="nav navbar-nav navbar-right">
            <li><img src="images/logo3.png"></li>
        </ul>
    </nav>

    <h1 style="text-align: center;">Sind die angegebenen Werte richtig?</h1>
    <form>
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="FormSelectStudio_">Ausgewählter Standort:</label>
                    <input type="text" class="form-control" name="FormSelectStudio_" readonly value="<?php echo $_POST["FormSelectStudio"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="FormSelectTarif_">Ausgewählter Standort:</label>
                    <input type="text" class="form-control" name="FormSelectTarif_" readonly value="<?php echo $_POST["FormSelectTarif"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputVName_">Vorname:</label>
                    <input type="text" class="form-control" name="inputVName_" readonly value="<?php echo $_POST["inputVName"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputNName_">Nachname:</label>
                    <input type="text" class="form-control" name="inputNName_" readonly value="<?php echo $_POST["inputNName"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="FormSelectGender_">Geschlecht:</label>
                    <input type="text" class="form-control" name="FormSelectGender_" readonly value="<?php echo $_POST["FormSelectGender"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputGeburtstg_">Geburtsdatum:</label>
                    <input type="text" class="form-control" name="inputGeburtstg_" readonly value="<?php echo $_POST["inputGeburtstag"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputStraße_">Straße:</label>
                    <input type="text" class="form-control" name="inputStraße_" readonly value="<?php echo $_POST["inputStraße"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputHN_">Hausnummer:</label>
                    <input type="text" class="form-control" name="inputHN_" readonly value="<?php echo $_POST["inputHN"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputPLZ_">PLZ:</label>
                    <input type="text" class="form-control" name="inputPLZ_" readonly value="<?php echo $_POST["inputPLZ"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputOrt_">Ort:</label>
                    <input type="text" class="form-control" name="inputOrt_" readonly value="<?php echo $_POST["inputOrt"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputEmail_">Email:</label>
                    <input type="text" class="form-control" name="inputEmail_" readonly value="<?php echo $_POST["inputEmail"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="newsletterTRUE_">Newsletter:</label>
                    <input type="text" class="form-control" name="newsletterTRUE_" readonly value="<?php 
                        if(isset($_POST["newsletterTRUE"]))
                        {
                            $newsletter = 1;
                            echo "Ja ";
                        }        
                        else
                        {
                            $newsletter = 0;
                            echo "Nein ";
                        }
                        ?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputTLF_">Telefonnummer:</label>
                    <input type="text" class="form-control" name="inputTLF_" readonly value="<?php echo $_POST["inputTLF"]?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="inputKontoinhaber_">Kontoinhaber:</label>
                    <input type="text" class="form-control" name="inputKontoinhaber_" readonly value="<?php echo $_POST["inputKontoinhaber"]?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="inputIBAN_">IBAN:</label>
                    <input type="text" class="form-control" name="inputIBAN_" readonly value="<?php echo $_POST["inputIBAN"]?>">
                </div>
            </div>
    </form>
        <form action="AusgabeÜberprüfungDaten.php" method="post">
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
