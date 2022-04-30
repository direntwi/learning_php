<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $index = 1;
    while($index <= 5){
        echo "$index <br>";
        $index++;
    }
    echo "<br>";

    for($i=1;$i <=5; $i++){
        echo "$i <br>";

    }
    echo "<br>";

    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i=1;$i <count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";
    }    

    //comments in php are made in the same way as C and C++
    /*
    this is how you make a comment block
    */


    ?>
</body>
</html> 