<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="description" content="Utopia-Tracker">
    <title>Utopia-Tracker - Hauptseite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="bg-dark text-light">
    <?php include("inc/nav.inc.php"); ?>
    <h1 class="container text-center mt-5">Übersicht</h1>

    <article class="grid-container">
        <section class="filter-grid">
            Filter
        </section>
        <section class="info-grid">
            <div class="info-table">
            </div>
        </section>
        <section class="map-grid">
            <div class="map-container">
                <div class="district" id="dis1" data-id="1">District 1</div>
                <div class="district" id="dis2" data-id="2">District 2</div>
                <div class="district" id="dis3" data-id="3">District 3</div>
                <div class="district" id="dis4" data-id="4">District 4</div>
                <div class="district" id="dis5" data-id="5">District 5</div>
            </div>
        </section>
    </article>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ad08af459.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('.district').hover(function() {
                var disNo = $(this).data('id');
                console.log(disNo);
                $.ajax({
                    url: './inc/districtData.inc.php',
                    type: 'post',
                    data: {
                        disNo: disNo
                    },
                    success: function(data) {
                        $('.info-table').html(data);
                        $('.info-grid').focus();
                    }
                });
            });
        });
    </script>
</body>

</html>