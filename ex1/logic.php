<?php

if (
    isset($_GET['nom']) &&
    isset($_GET['cognoms']) &&
    isset($_GET['email']) &&
    isset($_GET['missatge'])
) {
    $nom = $_GET['nom'];
    $cognoms = $_GET['cognoms'];
    $email = $_GET['email'];
    $missatge = $_GET['missatge'];
    echo "Missatge rebut, $nom. Gràcies per contactar. Et respondrem a $email";
    echo '<br><form action="index.php" method="get">
        <input type="submit" value="Tornar al formulari">
    </form>';
} else {
    echo "Error: cal omplir tots els camps amb dades vàlides.";
    echo '<br><form action="index.php" method="get">
        <input type="submit" value="Tornar al formulari">
    </form>';
}
?>