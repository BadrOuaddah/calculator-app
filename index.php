<?php
//variables
$var = "salam les amis" ;
$num = 10 ;
$boolT = true ;
$boolF = false ;
$float = 15.5 ;
$title = "Website"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home" ?></title>
</head>
<body>
    <?php
    
    echo "Hello World !";
    echo "<br>";
    echo $var ;
    echo "<br>";
    echo $num ;  
    ?>
</body>
</html>