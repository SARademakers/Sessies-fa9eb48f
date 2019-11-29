<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form action="cart.php" method="post" class="form">
            <label for="keuze">Keuze: </label>
            <input type="text" name="keuze" value="" required>
            <input type="submit" name="submit" value="submit">
        </form>

<?php
if (isset($_POST["keuze"])){
    if ($_POST["keuze"] <= 3) {
        $_SESSION["keuze"] = $_POST["keuze"];
    }
    
}
echo "<h1>" . ($_SESSION["keuze"]) . "</h1>";
?>   

    </body>
</html>