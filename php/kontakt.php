<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

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

    <h1>Kontakt</h1>

    <form>
        <div class="mb-3">
            <label>Nimi</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Sõnum</label>
            <textarea class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">
            Saada
        </button>
    </form>

    <br>

    <iframe
        src="https://www.google.com/maps?q=Tallinn&output=embed"
        width="100%"
        height="300">
    </iframe>
</div>

</body>
</html>