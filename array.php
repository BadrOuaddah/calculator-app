<form action="array.php" method="post">
    <label>
        Name of job :
        <input type="text" name="nameOfJob" id="nameOfJob">
        <input type="submit">
    </label>
</form>


<?php

$nameOfJob = $_POST["nameOfJob"];

if (empty($nameOfJob)) {
    echo "please enter name of job  :) ";
} else {
    $job = array(
        "Gamer" => array("name" => "ahmed", "age" => "24"),
        "Programmer" => array("name" => "ali", "age" => "25"),
        "Designer" => array("name" => "youssef", "age" => "26"),
        "Admin" => array("name" => "hamza", "age" => "35"),
    );

    echo "name : " . $job[$nameOfJob]["name"];
    echo "<br>";
    echo "age : " . $job[$nameOfJob]["age"];
}


?>








<?php

// $family = [
//     "designer" => "ahmed",
//     "programmer" => "ayoub",
//     "gamer" => "youssef",
//     "admin" => "ali",
// ];

// $name = $_POST["userName"];

// echo $family[$name];




// $family = array("Father", "Mother", "Brother");
// echo $family[2];
// $family[2] = "love";
// echo $family[2];






// $family = [
//     "designer" => "ahmed",
//     "programmer" => "ayoub",
//     "gamer" => "youssef",
//     "admin" => "ali",
// ];

// echo $family["gamer"];

?>