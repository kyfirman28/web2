<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas bilangan</title>
</head>

<body>

    <?php
    function Prima($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Pengulangan untuk Mencari kategori bilangan :";
    echo "<br>";
    for ($n1 = 1; $n1 <= 19; $n1++) {
        echo "<br>";
        if ($n1 % 2 == 0) {
            echo "<li>Angka $n1 adalah bilangan genap";
        } else {
            echo "<li>Angka $n1 adalah bilangan ganjil";
        }
        if (Prima($n1)) {
            if ($n1 > 10) {
                echo " dan sekaligus bilangan prima";
            } else {
                echo " sekaligus bilangan prima";
            }
        }
    }

    ?>


</body>

</html>