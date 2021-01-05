<?php 

    $servername = "localhost";
    $user = "root";
    $pw = "";
    $db = "sportstudio";

    #if(isset($_POST['test']))
    #{
    #   InsertIntoDatabase();
    #}

    #function InsertIntoDatabase()
    #{
            #Baut Verbindung mit der Datenbank auf
            $con = new mysqli($servername, $user, $pw, $db);

            if($con->connect_error){
                die("Verbindung zur Datenbank fehlgeschlagen.".$con->connect_error);
            }
            else{
                echo "Verbindung zur Datenbank steht!";
            }

            #Statement
            $sql = "INSERT INTO mitglieder (MitgliedNr, FitnessStudio, Tarif, Vorname, Nachname, Geschlecht, Geburtsdatum, Straße, Hausnummer, Plz, Ort, Email, Newsletter, Telefon, Kontoinhaber, IBAN) VALUES ('', '". $_POST["FormSelectStudio_"] ."', '". $_POST["FormSelectTarif_"] ."', '". $_POST["inputVName_"] ."', '". $_POST["inputNName_"] ."', '". $_POST["FormSelectGender_"] ."', '". $_POST["inputGeburtstg_"] ."', '". $_POST["inputStraße_"] ."', '". $_POST["inputHN_"] ."', '". $_POST["inputPLZ_"] ."', '". $_POST["inputOrt_"] ."', '". $_POST["inputEmail_"] ."', '". $_POST["newsletterTRUE_"] ."', '". $_POST["inputTLF_"] ."', '". $_POST["inputKontoinhaber_"] ."', '". $_POST["inputIBAN_"] ."')";

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
   # }
?>