<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex,.</title>
</head>
<body>
    <?php
        $fibo = 1; $nacci = 0;
        echo $nacci," ";
        echo $fibo," ";

        for ($x = 0; $x < 8; $x++) {
            $fibo = $fibo + $nacci;
            $nacci = $fibo - $nacci;
            echo $fibo," ";
        }
    ?>
</body>
</html>