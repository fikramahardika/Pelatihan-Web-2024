<?php
$kata = "Halo user"; // string
$age = 18; // integer
$buah = ['duku', 'duren', 'nanas',]; // array

$a = 5;
$b = 20;
$hasil = $a + $b;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan PHP</title>
</head>
<body>
    <?php 
    if ($age < 17){
        echo "Belom cukup umur";
    } else{
        echo "Umur sudah valid";
    }
    ?>
    <h2> Daftar buah yang sudah didata</h2>
        <ul>
        <?php
        foreach ($buah as $b) {
            echo "<li>$b</li>";
        }
        ?>
    </ul>
    <?php
        for ($i=0; $i <= 50; $i++){ // jikalau ingin sampai 50 pakai <= . jika hanya 49 <
            echo "<p>$i</p>";
        }
        ?>
        <br>
    <?php
        echo $hasil;
    ?>
</body>
</html>