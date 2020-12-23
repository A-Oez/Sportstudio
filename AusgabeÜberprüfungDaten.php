<?php 
    $newsletter = 0; 
?>

<html>
    <head>
        <title>Überprüfung der eingegebenen Daten</title>
    </head>
    <body>
        <h1>Sind die angegebene Werte richtig?</h1>

        <p>Ausgewähltes Studio: <?php echo $_POST["FormSelectStudio"]?></p>
        <p>Ausgewälter Tarif: <?php echo $_POST["FormSelectTarif"]?></p>
        <p>Vorname: <?php echo $_POST["inputVName"]?></p>
        <p>Nachname: <?php echo $_POST["inputNName"]?></p>
        <p>Geschlecht: <?php echo $_POST["FormSelectGender"]?></p>
        <p>Geburtsdatum: <?php echo $_POST["inputGeburtstag"]?></p>
        <p>Straße: <?php echo $_POST["inputStraße"]?></p>
        <p>HausNr.: <?php echo $_POST["inputHN"]?></p>
        <p>PLZ: <?php echo $_POST["inputPLZ"]?></p>
        <p>Ort: <?php echo $_POST["inputOrt"]?></p>
        <p>Email: <?php echo $_POST["inputEmail"]?></p>
        <p>Newsletter: 
        <?php 
        if(isset($_POST["newsletterTRUE"]))
        {
            $newsletter = 1;
            echo "Ja";
        }        
        else
        {
            $newsletter = 0;
            echo "Nein";
        }
        ?></p>
        <p>Telefon: <?php echo $_POST["inputTLF"]?></p>
        <p>Kontoinhaber: <?php echo $_POST["inputKontoinhaber"]?></p>
        <p>IBAN: <?php echo $_POST["inputIBAN"]?></p>


         <!-- Button --> 
        <from action="AusgabeÜberprüfungDaten.php" method="post">
            <input type="submit" name="test" id ="test" value="An Datenbank übertragen"/> 
        </form>

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
    </body>
</html>
