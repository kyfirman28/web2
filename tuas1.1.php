<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kotak</title>
    <style>
       .container {
    width: 290px;
    height: 272px;
    border: 3px solid black;
    margin: 50px auto;
    text-align: center;
}

.kotak1,
.kotak2,
.kotak3,
.kotakB {
    width: 80px;
    height: 80px;
    line-height: 80px;
}

.kotak1 {
    background-color: lightgray;
    margin-top: 5px;
    margin-left: 5px;
    border: 2px solid black;
    ;
}

.kotakB {
    background-color: lightgray;
    margin-left: 100px;
    border: 2px solid black;
}

.kotak2 {
    background-color: lightgray;
    margin-left: 100px;
    margin-top: -172px;
    border: 2px solid black;
    margin-bottom: 5px;
}

.kotak3 {
    background-color: lightgray;
    margin-left: 190px;
    border: 2px solid black;
    position: absolute;
    bottom: 480px;
}
    
    </style>
</head>
<body>
<?php $_A = "A";
      $_B = "B";
      $_C = "C";
?>
    <div class="container">
        <div class="kotak1">
            <?php echo $_A;
            ?>
        </div>
        <div class="kotak1">
        <?php echo $_A;
            ?>
        </div>
        <div class="kotak1">
        <?php echo $_A;
            ?>
        </div>
        <div class="kotak2">
        <?php echo $_B;
            ?>
        </div>
        <div class="kotakB">
        <?php echo $_B;
            ?>
        </div>
        <div class="kotak3">
        <?php echo $_C;
            ?>
        </div>
    </div>
</body>
</html>