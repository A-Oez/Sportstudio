<?php 
    $databaseStatus;
    $queryStatus;


    $servername = "localhost";
    $user = "root";
    $pw = "";
    $db = "sportstudio";

            #Baut Verbindung mit der Datenbank auf
            $con = new mysqli($servername, $user, $pw, $db);

            if($con->connect_error){
                die("Verbindung zur Datenbank fehlgeschlagen.".$con->connect_error);
            }
            else{
                $databaseStatus = "Verbindung-zur-Datenbank-steht!";
            }

            #Statement (falls nichtmehr funktioniert Absätze entfernen und zu einzeiler umformen)
            $sqlStatement = "INSERT INTO mitglieder (
                MitgliedNr, 
                FitnessStudio, 
                Tarif, 
                Vorname, 
                Nachname, 
                Geschlecht, 
                Geburtsdatum, 
                Straße, 
                Hausnummer, 
                Plz, 
                Ort, 
                Email, 
                Newsletter, 
                Telefon, 
                Kontoinhaber, 
                IBAN) 
                VALUES (
                    '', 
                    '". $_POST["FormSelectStudio_"] ."', 
                    '". $_POST["FormSelectTarif_"] ."', 
                    '". $_POST["inputVName_"] ."', 
                    '". $_POST["inputNName_"] ."', 
                    '". $_POST["FormSelectGender_"] ."', 
                    '". $_POST["inputGeburtstg_"] ."', 
                    '". $_POST["inputStraße_"] ."', 
                    '". $_POST["inputHN_"] ."', 
                    '". $_POST["inputPLZ_"] ."', 
                    '". $_POST["inputOrt_"] ."', 
                    '". $_POST["inputEmail_"] ."', 
                    '". $_POST["newsletterTRUE_"] ."', 
                    '". $_POST["inputTLF_"] ."', 
                    '". $_POST["inputKontoinhaber_"] ."', 
                    '". $_POST["inputIBAN_"] ."'
                )";

            #Hier wird das Statement ausgeführt und überprüft ob es erfolgreich war
            if($con->query($sqlStatement) === TRUE)
            {
                #Erfolgreich übertragen
                $queryStatus = "Query-succeded!";
            }     
            else
            {
                #Übertragung fehlgeschlagen
                $queryStatus = "Query-Faield" . $con->error;
            }

        $con->close();
?>

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
<body>
    <nav class="navbar" style="transform: translate(15%); left: 10%;">
        <ul class="nav navbar-nav navbar-right">
            <li><img src="images/logo3.png"></li>
        </ul>
    </nav>
        <div class="form-group col-md-6" style="transform: translate(15%); left: 17%;">
            <label for="FormDatabaseConnection">Datenbankstatus:</label>
            <input type="text" class="form-control" name="FormDatabaseConnection" value=<?php echo $databaseStatus?>>
               
            <label for="FormSQLExecuteStatus">Anlage Status:</label>
            <input type="text" class="form-control" name="FormSQLExecuteStatus" value=<?php echo $queryStatus?>>

            <a href="http://localhost/Sportstudio.php">Zurück zu Startseite</a>
        </div>
</body>