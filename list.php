<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="description" content="Utopia-Tracker">
    <title>Utopia-Tracker - Liste</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="bg-dark">
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
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">Check this custom checkbox</label>
                    </div>
                </li>
            </ul>
        </div>

        <div class="flex-item-4">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <!-- Add all of the citizen status values -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $con->query("SELECT * FROM citizen");

                    while ($entry = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $entry['ssn']; ?></td>
                            <td><?php echo $entry['addressID']; ?></td>
                            <td><?php echo $entry['first_name']; ?></td>
                            <td><?php echo $entry['last_name']; ?></td>
                            <td><?php echo $entry['age']; ?></td>
                            <td><?php echo $entry['gender']; ?></td>
                            <td><?php echo $entry['wallet']; ?></td>
                            <td><?php echo $entry['healthbar']; ?></td>
                            <td><?php echo $entry['event']; ?></td>
                            <td><?php echo $entry['eventTime']; ?></td>
                            <td><?php echo $entry['happiness']; ?></td>
                            <td><?php echo $entry['love']; ?></td>
                            <td>fear</td>
                            <td>sadness</td>
                            <td>anger</td>
                            <td>thirst</td>
                            <td>hunger</td>
                            <td>toilet</td>
                            <td>hygiene</td>
                            <td>employername</td>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ad08af459.js" crossorigin="anonymous"></script>
</body>

</html>