<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ostukorv</title>

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

    <h1>Ostukorv</h1>

    <?php
    if(isset($_GET["car"]))
    {
        echo "<p>Auto: ".$_GET["car"]."</p>";
        echo "<p>Hind: ".$_GET["price"]." €/päev</p>";
    }
    else
    {
        echo "<p>Ostukorv on tühi</p>";
    }
    ?>
</div>
</body>
</html>