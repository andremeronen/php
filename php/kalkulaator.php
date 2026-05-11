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