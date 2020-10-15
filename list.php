<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="description" content="Utopia-Tracker">
    <title>Utopia-Tracker - Liste</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="bg-dark text-light">
    <?php include("inc/nav.inc.php");
    include("inc/login.inc.php"); ?>
    <div class="flex-container">
        <div class="flex-item-1">
            <ul class="list-unstyled">
                <p>FILTERS</p>
                <div class="dropdown mb-1">
                    <label for="districtFilter">Bezirk</label><br />
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="districtFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alle
                    </button>
                    <div class="dropdown-menu" aria-labelledby="districtFilter">
                        <a class="dropdown-item district" data-id="0" href="#">Alle</a>
                        <a class="dropdown-item district" data-id="1" href="#">1</a>
                        <a class="dropdown-item district" data-id="2" href="#">2</a>
                        <a class="dropdown-item district" data-id="3" href="#">3</a>
                        <a class="dropdown-item district" data-id="4" href="#">4</a>
                        <a class="dropdown-item district" data-id="5" href="#">5</a>
                    </div>
                </div>
                <div class="dropdown mb-1">
                    <label for="employeeFilter">Arbeitsplatz</label><br />
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="employeeFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alle
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item employer" href="#" data-id="0">Alle</a>
                        <?php
                        $employer = $con->query("SELECT name FROM employer");
                        while ($results = $employer->fetch_assoc()) {
                        ?>
                            <a class="dropdown-item employer" href="#" data-id="<?php echo $results['name'] ?>"><?php echo $results['name'] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </ul>
            <ul class="list-unstyled">
                <p>COLUMN OPTIONS</p>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkSsn" checked>
                        <label class="custom-control-label" for="checkSsn">ssn</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkFirstname" checked>
                        <label class="custom-control-label" for="checkFirstname">Vorname</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkLastname" checked>
                        <label class="custom-control-label" for="checkLastname">Nachname</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAddress">
                        <label class="custom-control-label" for="checkAddress">Adresse</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAge">
                        <label class="custom-control-label" for="checkAge">Alter</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkGender">
                        <label class="custom-control-label" for="checkGender">Geschlecht</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkWallet">
                        <label class="custom-control-label" for="checkWallet">Bargeld</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkHealthbar">
                        <label class="custom-control-label" for="checkHealthbar">Gesundheit</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkEvent">
                        <label class="custom-control-label" for="checkEvent">Aktuelles Event</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkEventTime">
                        <label class="custom-control-label" for="checkEventTime">Eventzeit</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkHappiness">
                        <label class="custom-control-label" for="checkHappiness">Fröhlichkeit</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkLove">
                        <label class="custom-control-label" for="checkLove">Liebe</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkFear">
                        <label class="custom-control-label" for="checkFear">Angst</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkSadness">
                        <label class="custom-control-label" for="checkSadness">Traurigkeit</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAnger">
                        <label class="custom-control-label" for="checkAnger">Wut</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkThirst">
                        <label class="custom-control-label" for="checkThirst">Durst</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkHunger">
                        <label class="custom-control-label" for="checkHunger">Hunger</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkToilet">
                        <label class="custom-control-label" for="checkToilet">Harndrang</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkHygiene">
                        <label class="custom-control-label" for="checkHygiene">Hygiene</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkEmployername">
                        <label class="custom-control-label" for="checkEmployername">Arbeitgeber</label>
                    </div>
                </li>
            </ul>
        </div>

        <div class="flex-item-4">
            <table class="table table-dark overflow-scroll">
                <thead>
                    <tr>
                        <th class="checkSsn">SSN</th>
                        <th class="checkFirstname">Vorname</th>
                        <th class="checkLastname">Nachname</th>
                        <th class="checkAddress hideElement">Adresse</th>
                        <th class="checkAge hideElement">Alter</th>
                        <th class="checkGender hideElement">Geschlecht</th>
                        <th class="checkWallet hideElement">Bargeld</th>
                        <th class="checkHealthbar hideElement">Gesundheit</th>
                        <th class="checkEvent hideElement">Aktuelles Event</th>
                        <th class="checkEventTime hideElement">Eventzeit</th>
                        <th class="checkHappiness hideElement">Fröhlichkeit</th>
                        <th class="checkLove hideElement">Liebe</th>
                        <th class="checkFear hideElement">Angst</th>
                        <th class="checkSadness hideElement">Traurigkeit</th>
                        <th class="checkAnger hideElement">Wut</th>
                        <th class="checkThirst hideElement">Durst</th>
                        <th class="checkHunger hideElement">Hunger</th>
                        <th class="checkToilet hideElement">Harndrang</th>
                        <th class="checkHygiene hideElement">Hygiene</th>
                        <th class="checkEmployername hideElement">Arbeitgeber</th>
                        <!-- Add all of the citizen status values -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $con->query("SELECT citizen.*, address.*
                    FROM citizen
                    JOIN address
                    ON citizen.addressID = address.addressID;");

                    while ($entry = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td class="checkSsn"><?php echo $entry['ssn']; ?></td>
                            <td class="checkFirstname"><?php echo $entry['first_name']; ?></td>
                            <td class="checkLastname"><?php echo $entry['last_name']; ?></td>
                            <td class="checkAddress hideElement" id="<?php echo $entry['district'] ?>">
                                <?php
                                $adressString = $entry['district'] . "-" . $entry['street'] . " " . $entry['streetNumber'];
                                if (isset($entry['doorNumber'])) {
                                    $adressString .= "/" . $entry['doorNumber'];
                                }
                                echo $adressString;
                                ?></td>
                            <td class="checkAge hideElement"><?php echo $entry['age']; ?></td>
                            <td class="checkGender hideElement"><?php echo $entry['gender']; ?></td>
                            <td class="checkWallet hideElement"><?php echo $entry['wallet']; ?></td>
                            <td class="checkHealthbar hideElement"><?php echo $entry['healthbar']; ?></td>
                            <td class="checkEvent hideElement"><?php echo $entry['event']; ?></td>
                            <td class="checkEventTime hideElement"><?php echo $entry['eventTime']; ?></td>
                            <td class="checkHappiness hideElement"><?php echo $entry['happiness']; ?></td>
                            <td class="checkLove hideElement"><?php echo $entry['love']; ?></td>
                            <td class="checkFear hideElement"><?php echo $entry['fear']; ?></td>
                            <td class="checkSadness hideElement"><?php echo $entry['sadness']; ?></td>
                            <td class="checkAnger hideElement"><?php echo $entry['anger']; ?></td>
                            <td class="checkThirst hideElement"><?php echo $entry['thirst']; ?></td>
                            <td class="checkHunger hideElement"><?php echo $entry['hunger']; ?></td>
                            <td class="checkToilet hideElement"><?php echo $entry['toilet']; ?></td>
                            <td class="checkHygiene hideElement"><?php echo $entry['hygiene']; ?></td>
                            <td class="checkEmployername hideElement" id="<?php echo $entry['employerName'] ?>"><?php if (!isset($entry['employerName'])) {
                                                                                                                    echo ("Arbeitslos");
                                                                                                                } else {
                                                                                                                    echo $entry['employerName'];
                                                                                                                } ?></td>
                        </tr>
                    <?php
                    }
                    $con->close();
                    ?>
                    <!-- tablerows will be added with a loop -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ad08af459.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function() {
            ///////////////// District Filter /////////////////////
            $('.district').click(function() {
                var districtID = $(this).data('id');
                var addressList = document.getElementsByClassName("checkAddress");
                let dropdownTitle = document.getElementById("districtFilter");

                for (i = 0; i < addressList.length; i++) {
                    if (districtID == 0) {
                        addressList[i].parentElement.style.display = "table-row";
                        dropdownTitle.innerHTML = "Alle";
                    } else if (districtID != addressList[i].id) {
                        addressList[i].parentElement.style.display = "none";
                    } else {
                        addressList[i].parentElement.style.display = "table-row";
                    }
                }
                if (districtID != 0) {
                    dropdownTitle.innerHTML = districtID;
                }
            });
            ///////////////// District Filter ENDE /////////////////////

            ///////////////// Employer Filter /////////////////////
            $('.employer').click(function() {
                var employername = $(this).data('id');
                var employernameList = document.getElementsByClassName("checkEmployername");
                let dropdownTitle = document.getElementById("employeeFilter");

                for (i = 0; i < employernameList.length; i++) {
                    if (employername == 0) {
                        employernameList[i].parentElement.style.display = "table-row";
                        dropdownTitle.innerHTML = "Alle";
                    } else if (employername != employernameList[i].id) {
                        employernameList[i].parentElement.style.display = "none";
                    } else {
                        employernameList[i].parentElement.style.display = "table-row";
                    }
                }
                if (employername != 0) {
                    dropdownTitle.innerHTML = employername;
                }
            });
            ///////////////// Employer Filter ENDE /////////////////////
        });
    </script>
</body>

</html>