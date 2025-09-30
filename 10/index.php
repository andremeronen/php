<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
    include("menu.php");
    if(!empty($_GET["leht"])){
        $leht=htmlspecialchars($_GET["leht"]);
        if(is_file($leht.".php")){
            include($leht.".php");
        }else{
            echo "<p> 404 ei leidnud seda paska </p>";
        }
    } else{

    
    ?>
    <h1>avaleht</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nulla ad, accusamus voluptatum expedita quasi animi quisquam. Totam autem nemo velit natus incidunt nisi, at voluptatem tempore beatae rerum eaque.</p>
    <?php
    }
    ?>
</body>
</html>