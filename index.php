<?php
$perfume = [
    'Bath and Body Works' => [
        'Gingham',
        'Mad About You',
        'Perfect Peony',
        'Thousand Wishes'
    ],
    'Victoria Secret' => [
        'Pure Seduction',
        'Bare Vanilla',
        'Candy Crush',
        'Coconut Spark'
    ],
    'EDP'=>[
        'JPG Scandal',
        'Midnight Fantasy',
        'CH Good Girl',
        'Jo Malone Freesia'
    ]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>TABLE PERFUME</h1>
    <table>
    <?php
    foreach ($perfume as $name => $type){ //nested loop
        echo "<tr><td id=namePerfume>$name</td>"; //row nameperfume
 
        foreach ($type as $jenis){
            echo "<td id=typePerfume>$jenis</td>";  //dalam row nameperfume looping untuk td
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>