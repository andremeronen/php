<?php
$autod = file("MOCK_DATA.csv");
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Autod</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Autorent</a>
    </div>
</nav>

<div class="container mt-5">

    <h1>Meie autod</h1>

    <div class="row">
        <?php
        foreach($autod as $auto)
        {
            $andmed = explode(",", $auto);
            $mark = $andmed[0];
            $hind_paev = $andmed[1];
            $kirjeldus = $andmed[2];
        ?>

        <div class="col-md-4">

            <div class="card mb-4">

                <div class="card-body">

                    <h5><?php echo $mark; ?></h5>

                    <p><?php echo $kirjeldus; ?></p>

                    <p><?php echo $hind_paev; ?> €/päev</p>

                    <a href="cart.php?car=<?php echo $mark; ?>&price=<?php echo $hind_paev; ?>" class="btn btn-primary">
                        Lisa ostukorvi
                    </a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>