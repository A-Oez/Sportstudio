<html>
    <head>
        <title>Überprüfung der eingegebenen Daten</title>
        
    </head>
    
    <body>
        <h1>Sind die angegebene Werte richtig?</h1>
        
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
            
            if(isset($_POST["inputGeschlecht"])){
                $Geschlecht = $_POST["inputGeschlecht"];
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
                $NewsletterJN = "Ja";
            }        
            else
            {
                $newsletter = 0;
                $NewsletterJN = "Nein";
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

        <!-- TEXTBOXEN -->

        <div class="form-group col-md-6 ">
            <label for="inputVName ">Fitnessstudio</label>
            <input type="text " name="OutputFitnessstudio" class="form-control" value=<?php echo $Studio?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Tarif</label>
            <input type="text " name="OutputTarif" class="form-control" value=<?php echo $Tarif?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Vorname</label>
            <input type="text " name="OutputVName" class="form-control" value=<?php echo $Vorname?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Nachname</label>
            <input type="text " name="OutputNName" class="form-control" value=<?php echo $Nachname?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Geschlecht</label>
            <input type="text " name="OutputGeschlecht" class="form-control" value=<?php echo $Geschlecht?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Geburtstag</label>
            <input type="text " name="OutputGeburtstag" class="form-control" value=<?php echo $Geburtstag?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Straße</label>
            <input type="text " name="OutputStraße" class="form-control" value=<?php echo $Straße?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Hausnummer</label>
            <input type="text " name="OutputHausnummer" class="form-control" value=<?php echo $HausNr?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">PLZ</label>
            <input type="text " name="OutputPLZ" class="form-control" value=<?php echo $Plz?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Ort</label>
            <input type="text " name="OutputOrt" class="form-control" value=<?php echo $Ort?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Email</label>
            <input type="text " name="OutputEmail" class="form-control" value=<?php echo $Email?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Newsletter</label>
            <input type="text " name="OutputEmail" class="form-control" value=<?php echo $NewsletterJN?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Telefonnummer</label>
            <input type="text " name="OutputTelefon" class="form-control" value=<?php echo $Telefon?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">Kontoinhaber</label>
            <input type="text " name="OutputKontoinhaber" class="form-control" value=<?php echo $Kontoinhaber?>>
        </div>
        <div class="form-group col-md-6 ">
            <label for="inputVName ">IBAN</label>
            <input type="text " name="OutputIBAN" class="form-control" value=<?php echo $Iban?>>
        </div>
   


         <!-- Button -->  <!-- POST an eine 3te neue Seite wo ausgibt erfolgreich angelegt oder halt nicht oder zurück an die Startseite wo ein Popup sich öffnet -->
        <form class="" action="" method="post">
            <?php 
                #input type array = [];
            ?>
            <button type="submit" name="SendToDatabase" value="call">An Datenbank übertragen"</button> 
        </form>

        <?php 
            
            if(isset($_POST['SendToDatabase']))
            {
                Send();
            }


            function SendMitglied($DatenArray)
            {
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
