<?php

$number_1 = $_GET["number_1"];
$number_2 = $_GET["number_2"];
$op = $_GET["op"];
// $box = $_GET["checkbox_ square_root"];

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


// TODO add aquare root function to calculator
// function square_root($number_1)
// {
//     $result = sqrt($number_1);
//     return $result;
// }
// TODO add aquare root function to calculator


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



    <!-- 

    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header">
                    <h5 class="card-title" style="text-align: center;">
                        Card title
                    </h5>
                </div>
                <br>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="card-footer">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
 -->

    <div class="col d-flex justify-content-center">
        <div class="card">
            <div class="container">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title" style="text-align: center;">
                            Calculator
                        </h5>
                    </div>
                    <form action="index.php" method="GET" class="form">
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
                        <br>
                        <center>
                            <input type="submit" class="btn btn-primary" value="Do it">
                        </center>
                        <br>
                        <div class="card-footer">
                            <br>
                            <div class="alert alert-success">
                                Result is :
                                <?php
                                echo $result;
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    <div>
        <label for="checkbox_ square_root">
            <input type="checkbox" name="checkbox_ square_root" id="checkbox_ square_root" value="yes">
            click here !
        </label>
    </div>

    </form>

    <script>

    </script>

</body>

</html>