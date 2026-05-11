<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ostukorv</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

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