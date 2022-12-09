<?php

$number_1 = $_POST["number_1"];
$number_2 = $_POST["number_2"];
$op = $_POST["op"];

// math funtions
function addition($number_1, $number_2)
{
    $result = $number_1 + $number_2;
    return $result;
};
function subtraction($number_1, $number_2)
{
    $result = $number_1 - $number_2;
    return $result;
};
function multiplication($number_1, $number_2)
{
    $result = $number_1 * $number_2;
    return $result;
};
function division($number_1, $number_2)
{
    $result = $number_1 / $number_2;
    return $result;
};
function power($number_1, $number_2)
{
    $result = pow($number_1, $number_2);
    return $result;
};

// user have must enter data
if (empty($number_1)) {
    $result = "first number is empty, please enter number 1 !";
} elseif (empty($number_2)) {
    $result = "second number is empty, please enter number 2 !";
} elseif (empty($op)) {
    $result = "please enter operation !";
} else {

    // ! after user have enter data

    // with IF statement

    if ($op === 'addition' or $op === '+') {
        $result = addition($number_1, $number_2);
    } elseif ($op === 'subtraction' or $op === '-') {
        $result = subtraction($number_1, $number_2);
    } elseif ($op === 'multiplication' or $op === '*') {
        $result = multiplication($number_1, $number_2);
    } elseif ($op === 'division' or $op === '/') {
        $result = division($number_1, $number_2);
    } elseif ($op === 'power' or $op === '^') {
        $result = power($number_1, $number_2);
    }

    // ! with SWITCH statement

    // switch ($op) {
    //     case '+' or 'addition' :
    //         $result = addition($number_1, $number_2);
    //         break;
    //     case '-' or 'subtraction' :
    //         $result = subtraction($number_1, $number_2);
    //         break;
    //     case '*' or 'multiplication' :
    //         $result = multiplication($number_1, $number_2);
    //         break;
    //     case '/' or 'division' :
    //         $result = division($number_1, $number_2);
    //         break;
    //     case '^' or 'power' :
    //         $result = power($number_1, $number_2);
    //         break;
    //     default:
    //         echo "erorr";
    //         break;
    // }

}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN  CSS only -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <!-- CSS Offline / Local -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <div class="">

    </div>
    <div class="container">
        <form action="index.php" method="POST" class="form">
            <div>
                <label>Enter Number 1 : </label>
                <input type="number" id="number_1" name="number_1" class="form-control">
            </div>

            <div>
                <label>Enter Number 2 : </label>
                <input type="number" id="number_2" name="number_2" class="form-control">
            </div>
            <div>
                <label>
                    Operation : (You can enter the following words or symbols : 'addition' or "+" ; 'subtraction' or "-"
                    ; 'multiplication' or "*" ; 'division' or "/" ; 'power' or "^")
                </label>
                <input type="text" id="op" name="op" class="form-control">
            </div>

    </div>
    <br>
    <center>
        <input type="submit" class="btn btn-primary" value="Do it">
    </center>
    <br>
    <div class="alert alert-success">
        Result is :
        <?php
        echo $result;
        ?>
    </div>
    </form>

</body>

</html>