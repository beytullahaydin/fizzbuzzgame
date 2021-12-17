<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizz&Buzz</title>
    <style>
        body{
            background-color: red;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 98vh;
            overflow: auto;
            padding: 1vh 0;
            margin: 0;
        }
        .container{
            width: 75vw;
            background-color: #fff;
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5vh 0;
            overflow: auto;
            gap: 1vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo '<span>';
            if ($i % 3 == 0 and $i % 5 == 0) {
                echo 'FizzBuzz';
            } else {
                if ($i == 3 or $i % 3 == 0) {
                    echo 'Fizz';
                } else {
                    if ($i == 5 or $i % 5 == 0) {
                        echo 'Buzz';
                    } else {
                        echo $i;
                    }
                }
            }
            echo '</span>';
        }
        ?>
    </div>
</body>
</html>