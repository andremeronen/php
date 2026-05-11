<?php
$pildid = glob("reklaam/*");
shuffle($pildid);
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Autolaenutus</title>

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

<div id="banner" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $esimene = true;
        foreach($pildid as $pilt)
        {
        ?>
        <div class="carousel-item <?php if($esimene){ echo 'active'; } ?>">
            <img src="<?php echo $pilt; ?>" class="d-block w-100">
        </div>
        <?php
        $esimene = false;
        }
        ?>

    </div>
</div>

<div class="container mt-5">
    <h1>Tere tulemast siia saidile</h1>
    <p>Parim sait siin internetis</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>