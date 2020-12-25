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
    <nav class="navbar" style="transform: translateX(15%); left: 10%;">
        <ul class="nav navbar-nav navbar-right">
            <li><img src="images/logo3.png"></li>
        </ul>
    </nav>
    <form action="AusgabeÜberprüfungDaten.php" method="post" class="main-form needs-validation" novalidate>
        <div class="container " style="transform: translateX(30%); left: 10%; margin-top: 10px; margin-bottom: 10px;">
            <div class="form-row">
                <div class="form-group">
                    <label for="FormSelectStudio ">Standort:</label>
                    <select name="FormSelectStudio" class="form-control ">
                           <option>Heilbronn</option>
                           <option>Öhringen</option>
                           <option>Weinsberg</option>
                           <option>Stuttgart</option>
                           <option>Frankfurt</option>
                           <option>Nürnberg</option>
                         </select>
                </div>
                <div class="form-group " style="margin-left: 30px;" id="TarifAuswahl">
                    <label for="FormSelectTarif ">Tarif:</label>
                    <select name="FormSelectTarif" class="form-control ">   
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
        </div>
        
        <hr style="width: auto; height: 1px; background-color:steelblue; margin: 0px; "></hr>
        
        <section class="text-center;" style="margin-top: 50px; margin-left: 10px;">
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
                <div class="form-group col-md-6 ">
                    <label for="FormSelectGender ">Geschlecht <a style="color:red">*</a></label>
                    <select name="FormSelectGender" multiple class="form-control " required>
                          <option>Männlich</option>
                          <option>Weiblich</option>
                          <option>Divers</option>
                        </select>

                </div>
                <div class="image ">
                    <img src="images/bodyImagejpg.jpg ">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label for="inputVName ">Vorname <a style="color:red">*</a> </label>
                        <input type="text " pattern="[a-zA-ZäöüÄÖÜß ]*" name="inputVName" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputNName ">Nachname <a style="color:red">*</a> </label>
                        <input type="text " pattern="[a-zA-ZäöüÄÖÜß- ]*" name="inputNName" class="form-control " required>
                    </div>
                </div>
                <div class="form-group" style="margin-left: 10px">
                    <label for="inputGeburtstag ">Geburtsdatum <a style="color:red">*</a> </label>
                    <input type="date" name="inputGeburtstag" class="form-control" required>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputStraße ">Straße</label>
                        <input type="text " name="inputStraße" class="form-control ">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputHN ">Hausnummer</label>
                        <input type="text " name="inputHN" class="form-control ">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputPLZ ">Postleitzahl <a style="color:red">*</a> </label>
                        <input type="text" pattern="[0-9]*" maxlength="5" name="inputPLZ" class="form-control " required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputOrt ">Ort <a style="color:red">*</a> </label>
                        <input type="text " pattern="[a-zA-ZäöüÄÖÜß ]*" name="inputOrt" class="form-control " required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputTLF ">Telefonnummer:</label>
                        <input type="text" pattern="[0-9]*" maxlength="15" name=" inputTLF" class="form-control ">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputEmail ">Email: <a style="color:red ">*</a> </label>
                        <input type="email " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="inputEmail" class="form-control " placeholder="example@xyz.com" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputKontoinhaber ">Kontoinhaber <a style="color:red ">*</a> </label>
                        <input type="text " pattern="[a-zA-ZäöüÄÖÜß ]*" name="inputKontoinhaber" class="form-control " placeholder ="Vor-/&Nachname" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputIBAN ">IBAN <a style="color:red ">*</a> </label>
                        <input type="text " pattern="^DE\d{2}\s?([0-9a-zA-Z]{4}\s?){4}[0-9a-zA-Z]{2}$" name="inputIBAN" class="form-control " placeholder="DE" required>
                    </div>
                </div>
            </div>
            <button type="submit " class="btn btn-primary " style="background-color: steelblue; margin-bottom: 50px; ">Registrieren</button>
        </div>

    </form>
    
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>

    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
