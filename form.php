
    <form action="form.php" method="POST">
        First Name: <input type="text" name="first_name">
        <br>
        <br>
        Last Name: <input type="text" name="last_name">
        <br>
        <br>
        <input type="submit">

    </form>


    <?php
    echo $_POST["first_name"];
    echo $_POST["last_name"];
    // echo $_REQUEST["first_name"];
    // echo $_REQUEST["last_name"];





    ?>