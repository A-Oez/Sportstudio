<!DOCTYPE html>
<html lang="de">
<html>

    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <title> Sportstudio</title>
    </head>
    <body>
        <!-- Überschrift-->
        <h1>Sportstudio- Anmeldung</h1>

        <form action="AusgabeÜberprüfungDaten.php" method="post" >

            <div class="dropdownStudio">
                <!-- Dropdown erstellen-->
                <button class="dropbtnStudio">Fitnessstudio</button>
                <div class="dropdownStudio-content">
                    <a>Fitnessstudio 1</a>
                    <a>Fitnessstudio 2</a>
                    <a>Fitnessstudio 3</a>
                </div>
            </div>

            <p> <!-- Warum hast du das hier in ein p gepackt? -->
                <div class="dropdownTarif">
                    <!-- Dropdown Tarif erstellen 
                (eventuell Infotext hinzufügen pro Tarif)-->
                    <button class="dropbtnTarif">Tarif</button>
                    <div class="dropdownTarif-content">
                        <a>Basic</a>
                        <a>Classic</a>
                        <a>Premium</a>
                    </div>
                </div>
            </p>

            <p>
                <strong> Email: </strong>
                <input type="text" name="email" />
            </p>


            <strong> Newsletter: </strong>
            <input type="checkbox" name="newsletterTRUE" />
            <em>Benachrichtungen vom Newsletter bekommen?</em>
            <!-- Infotext, falls kein Newsletter nichts auswählen-->

            <hr> </hr>
            <!-- Style noch hinzufügen-->
            <h2> Personendaten:</h2>

            <!-- Geschlecht durch Dropdown ersetzen das macht das auslesen leichter da sonst mit if abfragen (mehraufwand) überprüft werden muss ob nur eine und welches Feld angekreuzt wurde -->
            <p> <strong> Geschlecht: </strong> </p>
            <ul>
                <li>
                    Männlich:
                    <input type="checkbox" name="geschlechtM" />
                </li>
                <li>
                    Weiblich:
                    <input type="checkbox" name="geschlechtW" />
                </li>
                <li>
                    Divers:
                    <input type="checkbox" name="geschlechtD" />
                </li>
            </ul>

            <strong> Vorname: </strong>
            <input type="text" name="Vname" />

            <strong> Nachname: </strong>
            <input type="text" name="Nname" />

            <strong> Geburtsdatum: </strong>
            <!--Durch ein Kalender Element ersetzen evtl-->
            <input type="text" name="geburtsdatum" />

            <p>
                <strong> Straße: </strong>
                <input type="text" name="straße" />

                <strong> Hausnummer: </strong>
                <input type="text" name="hausnummer" />

                <strong> PLZ: </strong>
                <input type="text" name="plz" />

                <strong> Ort: </strong>
                <input type="text" name="ort" />
            </p>

            <p>
                <strong> Telefonnummer: </strong>
                <input type="text" name="tlfnummer" />

                <strong> Kontoinhaber: </strong>
                <input type="text" name="kontoinhaber" />

                <strong> IBAN: </strong>
                <input type="text" name="iban" />
            </p>

            <button type="submit">Registrieren</button>
            
        </form>
        
    </body>

</html>