<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 12</title>
</head>
<body>
    <h1>harjutus 12</h1>
    <form action="">
        start: <input type="time" name="start" id=""><br>
        finish: <input type="time" name="finish" id=""><br>
        <input type="submit" value="leia aeg">
    </form>
    <?php
    $s=strtotime($_GET["start"]);
    $f=strtotime($_GET["finish"]);

    $diff=abs($s - $f)/3600*60;
    echo intdiv($diff,60).":".$diff%60;
    

   

    ?>
    <?php
    $allikas = 'tootajad.csv';
    $mpalk=0;$npalk=0;
    $mkokku=0;$nkokku=0;
    $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    while(!feof($minu_csv)){
        $rida = fgetcsv($minu_csv, filesize($allikas),';');
        if($rida[1] == "m") {
                $mkokku+=1;
                $mpalk += $rida[2];
            }else{
                $nkokku+=1;
                $npalk += $rida[2];
            }
        }
        if($mpalk/$mkokku>$npalk/$nkokku){
            echo "naisi ahistatakse";
        }
        if($mpalk/$mkokku<$npalk/$nkokku){
            echo "mehi ahistatakse";
        }
        echo '<br>';
        
    
    fclose($minu_csv);

    ?>
</body>
</html>