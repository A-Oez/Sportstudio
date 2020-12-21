<html>
    <head>
        <title>TEST PHP</title>
    </head>
    <body>
        <h1>Sind die angegebene Werte richtig?</h1>

        <?php
            echo $_POST["Vname"];
            echo "<br>";
            echo $_POST["Nname"];
            echo "<br>";
            echo $_POST["geburtsdatum"];
            echo "<br>";
            echo $_POST["newsletterTRUE"];
            echo "<br>";
            echo $_POST["email"];
            echo "<br>";
            echo $_POST["straße"];
            echo "<br>";
            echo $_POST["hausnummer"];
            echo "<br>";
            echo $_POST["plz"];
            echo "<br>";
            echo $_POST["ort"];
            echo "<br>";
        ?>


        <!-- Button zum bestätigen -->
        <!-- Button für zurück -->
    </body>
</html>

<!-- class Mitglied()
            {
                private $mitgliedsNr;
                private $fitnesstudio;
                private $tarif;
                private $vorname;
                private $nachname;
                private $geschlecht;
                private $geburtsdatum;
                private $straße;
                private $hausNr;
                private $plz;
                private $ort;
                private $telefonNr;
                private $kontoinhaber;
                private $iban

                public function __construct($Name, $Alter)
                {
                    $name = $vorname;
                    $alter = $nachname;
                }  
            } -->