<html>
    <head>
        <title>Überprüfung der eingegebenen Daten</title>
    </head>
    <body>
        <h1>Sind die angegebene Werte richtig?</h1>

        <p>Ausgewähltes Studio: PLATZHALTER</p>
        <p>Ausgewälter Tarif: PLATZHALTER</p>
        <p>Vorname: <?php echo $_POST["Vname"]?></p>
        <p>Nachname: <?php echo $_POST["Nname"]?></p>
        <p>Geschlecht: PLATZHALTER</p>
        <p>Geburtsdatum: <?php echo $_POST["geburtsdatum"]?></p>
        <p>Straße: <?php echo $_POST["straße"]?></p>
        <p>HausNr.: <?php echo $_POST["hausnummer"]?></p>
        <p>PLZ: <?php echo $_POST["plz"]?></p>
        <p>Ort: <?php echo $_POST["ort"]?></p>
        <p>Email: <?php echo $_POST["email"]?></p>

        <p>Newsletter: 
        <?php 
        if(isset($_POST["newsletterTRUE"]))
        {
            echo "Ja";
        }        
        else
        {
            echo "Nein";
        }
        ?></p>
        
        <p>Telefon: <?php echo $_POST["tlfnummer"]?></p>
        <p>Kontoinhaber: <?php echo $_POST["kontoinhaber"]?></p>
        <p>IBAN: <?php echo $_POST["iban"]?></p>

        <!-- Button -->
        <?php 
            $servername = "localhost";
            $user = "root";
            $pw = "";
            $db = "sportstudio";

            function InsertIntoDatabase()
            {
                $con = new mysqli($servername, $user, $pw, $db);

                if($con->connect_error){
                die("Verbindung zur Datenbank fehlgeschlagen.".$con->connect_error);

                $sql = "INSERT INTO mitglieder (FitnessStudio, Tarif, Vorname,Nachname,Geschlecht,Geburtsdatum,Straße,Hausnummer,Plz,Ort,Email,Newsletter,Telefon,Kontoinhaber,IBAN) VALUES ('PLATZHALTER', 'PLATZHALTER', '$_POST["Vname"]', '$_POST["Nname"]', 'PLATZHALTER', '$_POST["geburtsdatum"]', '$_POST["straße"]', '$_POST["hausnummer"]', '$_POST["plz"]', '$_POST["ort"]', '$_POST["email"]', '$_POST["newsletterTRUE"]', '$_POST["tlfnummer"]', '$_POST["kontoinhaber"]', '$_POST["iban"]')";

                if($con->query($sql) === TRUE)
                {
                    #Erfolgreich übertragen
                }
                else
                {
                    #Nicht erfolgreich übertragen worden.
                }

                $con->close();
            }
            

        ?>
        <button onclick="InsertIntoDatabase()">Eingabe bestätigen</button>
    </body>
</html>