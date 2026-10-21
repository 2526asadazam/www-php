<?php
session_start();

// Preus dels productes
$preuTeclat = 45;
$preuRatoli = 25;

// Inicialització de la sessió si no existeix
if (!isset($_SESSION['unitats_teclat'])) {
    $_SESSION['unitats_teclat'] = 0;
    $_SESSION['unitats_ratoli'] = 0;
}

$compraFinalitzada = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Processar la confirmació de la compra (buidar cistella)
    if (isset($_POST['pagar'])) {
        unset($_SESSION['unitats_teclat']);
        unset($_SESSION['unitats_ratoli']);
        $compraFinalitzada = true;
    } else {
        // Processar afegit de productes
        $producte = $_POST['item'] ?? '';
        $numUnitats = filter_var($_POST['quantitat'] ?? 0, FILTER_VALIDATE_INT);

        if ($numUnitats && $numUnitats > 0) {
            if ($producte === 'teclat') {
                $_SESSION['unitats_teclat'] += $numUnitats;
            } elseif ($producte === 'ratoli') {
                $_SESSION['unitats_ratoli'] += $numUnitats;
            }
        }

        header('Location: index.html');
        exit();
    }
}

// Càlculs del resum
$cantTeclats = $_SESSION['unitats_teclat'] ?? 0;
$cantRatolins = $_SESSION['unitats_ratoli'] ?? 0;

$subtotalTeclats = $cantTeclats * $preuTeclat;
$subtotalRatolins = $cantRatolins * $preuRatoli;
$totalCompra = $subtotalTeclats + $subtotalRatolins;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la Compra</title>
</head>
<body>

    <?php if ($compraFinalitzada): ?>

        <h1>Moltes gràcies per la seva compra!</h1>
        <p>El pagament s'ha processat correctament i la cistella s'ha buidat.</p>

    <?php elseif ($totalCompra === 0): ?>

        <h1>La cistella està buida</h1>
        <p>No has afegit cap producte a la teva compra.</p>

    <?php else: ?>

        <h1>Resum de la compra</h1>

        <ul>
            <?php if ($cantTeclats > 0): ?>
                <li>
                    Teclats mecànics: <?= $cantTeclats ?> unitat(s) 
                    &times; <?= $preuTeclat ?> € = <?= $subtotalTeclats ?> €
                </li>
            <?php endif; ?>

            <?php if ($cantRatolins > 0): ?>
                <li>
                    Ratolins sense fils: <?= $cantRatolins ?> unitat(s) 
                    &times; <?= $preuRatoli ?> € = <?= $subtotalRatolins ?> €
                </li>
            <?php endif; ?>
        </ul>

        <h3>Total de la compra: <?= $totalCompra ?> €</h3>

        <form action="cistella_compra.php" method="POST">
            <button type="submit" name="pagar" value="1">Confirmar compra</button>
        </form>

    <?php endif; ?>

    <br>

    <a href="index.html">Tornar a la botiga</a>

</body>
</html>