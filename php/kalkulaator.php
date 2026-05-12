<?php

$tulemus = "";

if(isset($_POST["arvuta"]))
{
    $auto = $_POST["auto"];
    $hind = $_POST["hind"];
    $paevad = $_POST["paevad"];
    $koguhind = $hind * $paevad;
    if(isset($_POST["kindlustus"]))
    {
        $koguhind = $koguhind + (10 * $paevad);
    }
    if(isset($_POST["iste"]))
    {
        $koguhind = $koguhind + (5 * $paevad);
    }
    $tulemus = "Auto: ".$auto." Hind kokku: ".$koguhind."€";
    file_put_contents("orders.txt", $tulemus.PHP_EOL, FILE_APPEND);
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kalkulaator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Autorent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tooted.php">Tooted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulaator.php">Kalkulaator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ostukorv.php">Ostukorv</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <h1>Kalkulaator</h1>

    <form method="POST">
        <div class="mb-3">
            <label>Auto nimi</label>
            <input type="text" name="auto" class="form-control">
        </div>

        <div class="mb-3">
            <label>Päevahind</label>
            <input type="number" name="hind" class="form-control">
        </div>

        <div class="mb-3">
            <label>Päevade arv</label>
            <input type="number" name="paevad" class="form-control">
        </div>

        <div class="form-check">
            <input type="checkbox" name="kindlustus" class="form-check-input">
            <label class="form-check-label">Kindlustus</label>
        </div>

        <div class="form-check">
            <input type="checkbox" name="iste" class="form-check-input">
            <label class="form-check-label">Lapseiste</label>
        </div>

        <br>
        <button type="submit" name="arvuta" class="btn btn-success">
            Arvuta
        </button>
    </form>
    <br>

    <?php
    echo $tulemus;
    ?>
</div>

</body>
</html>