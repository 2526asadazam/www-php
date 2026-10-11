<?php
$preu = $_POST['preu'] ?? '';
$iva  = $_POST['iva'] ?? '';

echo '<!DOCTYPE html><html lang="ca"><head><meta charset="UTF-8"><title>Resultat</title></head><body>';
if (is_numeric($preu) && $preu >= 0 && in_array($iva, ['21', '10', '4'], true)) {
    $total = round($preu * (1 + $iva / 100), 2);   // SUMEM l'IVA
    echo "El preu de $preu €, amb un IVA del $iva%, és de $total €.";
} else {
    echo "Error introduint les dades.";
}
echo '<br><br><a href="index.php">Tornar al formulari</a></body></html>';