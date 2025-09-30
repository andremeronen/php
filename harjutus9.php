<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 8</title>
</head>
<body>
    <h1>Harjutus 9</h1>

<?php
function tervitus($nimi) {
     return "Tere, " . ucfirst(strtolower($nimi)) . "!";
}

function eraldatähed($sisend) {
    return implode('.', str_split(strtoupper($sisend)));
}

function halvadusõnad($sisend, $ropud_sõnad) {
    return str_replace($ropud_sõnad, '***', $sisend);
}

function email($eesnimi, $perenimi) {
    $eesnimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($eesnimi));
    $perenimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($perenimi));
    
    return $eesnimi . $perenimi . "@hkhk.edu.ee";
}
$nimi = "ANdRe MErOnEN";
$sisend = "stalker";
$lauses = "Sa oled täielik noob";
$eesnimi = "Andre";
$perenimi = "Meronen";

echo tervitus($nimi) . "<br>";
echo eraldatähed($sisend) . "<br>"; 
echo halvadusõnad($lauses, array("noob")) . "<br>"; 
echo email($eesnimi, $perenimi); 
?>
</body>
</html>