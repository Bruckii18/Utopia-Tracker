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
            <ul>
                <p>FILTERS</p>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
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
                        <th class="checkAddress">Adresse</th>
                        <th class="checkAge">Alter</th>
                        <th class="checkGender">Geschlecht</th>
                        <th class="checkWallet">Bargeld</th>
                        <th class="checkHealthbar">Gesundheit</th>
                        <th class="checkEvent">Aktuelles Event</th>
                        <th class="checkEventTime">Eventzeit</th>
                        <th class="checkHappiness">Fröhlichkeit</th>
                        <th class="checkLove">Liebe</th>
                        <th class="checkFear">Angst</th>
                        <th class="checkSadness">Traurigkeit</th>
                        <th class="checkAnger">Wut</th>
                        <th class="checkThirst">Durst</th>
                        <th class="checkHunger">Hunger</th>
                        <th class="checkToilet">Harndrang</th>
                        <th class="checkHygiene">Hygiene</th>
                        <th class="checkEmployername">Arbeitgeber</th>
                        <!-- Add all of the citizen status values -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $con->query("SELECT * FROM citizen");

                    while ($entry = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td class="checkSsn"><?php echo $entry['ssn']; ?></td>
                            <td class="checkFirstname"><?php echo $entry['first_name']; ?></td>
                            <td class="checkLastname"><?php echo $entry['last_name']; ?></td>
                            <td class="checkAddress"><?php echo $entry['addressID']; ?></td>
                            <td class="checkAge"><?php echo $entry['age']; ?></td>
                            <td class="checkGender"><?php echo $entry['gender']; ?></td>
                            <td class="checkWallet"><?php echo $entry['wallet']; ?></td>
                            <td class="checkHealthbar"><?php echo $entry['healthbar']; ?></td>
                            <td class="checkEvent"><?php echo $entry['event']; ?></td>
                            <td class="checkEventTime"><?php echo $entry['eventTime']; ?></td>
                            <td class="checkHappiness"><?php echo $entry['happiness']; ?></td>
                            <td class="checkLove"><?php echo $entry['love']; ?></td>
                            <td class="checkFear"><?php echo $entry['fear']; ?></td>
                            <td class="checkSadness"><?php echo $entry['sadness']; ?></td>
                            <td class="checkAnger"><?php echo $entry['anger']; ?></td>
                            <td class="checkThirst"><?php echo $entry['thirst']; ?></td>
                            <td class="checkHunger"><?php echo $entry['hunger']; ?></td>
                            <td class="checkToilet"><?php echo $entry['toilet']; ?></td>
                            <td class="checkHygiene"><?php echo $entry['hygiene']; ?></td>
                            <td class="checkEmployername"><?php if (!isset($entry['employername'])) {
                                                                echo ("Arbeitslos");
                                                            } else {
                                                                echo $entry['employername'];
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
</body>

</html>